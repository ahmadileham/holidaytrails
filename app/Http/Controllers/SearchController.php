<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Symfony\Component\Finder\SplFileInfo;

class SearchController extends Controller
{
    const BUFFER = 10;
    private function modelNamespacePrefix(){
        return app() -> getNamespace() . 'Models\\';
    }

    public function search(Request $request){
        $keyword = $request->search;

        // load all models in the Models directory
        $files = File::allFiles(app()->basePath() . '/app/Models');

        $toExclude = [
            User::class,
        ];

        collect($files)->map(function (SplFileInfo $file){
            $filename = $file->getRelativePathName();
            if(substr($filename, -4) !== '.php'){
                return null;
            }
            return substr($filename, 0, -4);
        })->filter(function (?string $classname) use($toExclude){
            // filter out the ones that use the Searchable trait
            if($classname === null){
                return false;
            }

            $reflection = new \ReflectionClass($this -> modelNamespacePrefix(). $classname);

            //check if class extends eloquent model
            $isModel = $reflection -> isSubclassOf(Model::class);

            $searchable = $reflection -> hasMethod('search');

            return $isModel && $searchable && !in_array($reflection -> getName(), $toExclude, true);
        }) -> map(function ($classname) use($keyword){
             
            $model = app($this -> modelNamespacePrefix() . $classname);

            $fields = array_filter($model ::SEARCHABLE_FIELDS, fn($field) => $field !== 'id');

            return $model::search($keyword) -> get() -> map(function($modelRecord) use($fields, $keyword, $classname){

                $fieldsData = $modelRecord -> only($fields);

                $serializedValues = collect($fieldsData) -> join(' ');

                $searchPos = strpos(strtolower($serializedValues), strtolower($keyword));
                
                if($searchPos !== false){
                    $start = $searchPos - 10;

                    $start = $start < 0 ? 0 : $start;

                    $length = strlen($keyword) + 2 * self::BUFFER;

                    $sliced = substr($serializedValues, $start, $length);

                    $shouldAddPrefix = $start > 0;
                    $shouldAddPostfix = ($start + $length) < strlen($serializedValues);

                    $sliced = $shouldAddPrefix ? '...' . $sliced : $sliced;
                    $sliced = $shouldAddPostfix ? $sliced . '...' : $sliced;
                }

                $modelRecord -> setAttribute('match', $sliced ?? substr($serializedValues, 0, 2*self::BUFFER) . '...');

                //the model name
                $modelRecord -> setAttribute('model', $classname);

                //the url to view the resource -- the view link
                $modelRecord -> setAttribute('view_link', $this -> resolveModelViewLink($modelRecord));
                return $modelRecord;
            });
        })->flatten(1);

        //combine search results together and send back as a response
        return SearchResource::collection($results);
    } 

    private function resolveModelViewLink(Model $model){
        // to return a url like /{model-name}/{model-id}
        $mapping = [
            Post::class => '/post/{id}'
        ];

        // get the fully qualified class name of the model
        $modelClass = get_class($model);

        //check if class has a $mapping entry, if yes, use that url pattern
        if(Arr::has($mapping, $modelClass)){
            return URL::to(str_replace('{id}', $model -> id, $mapping[$modelClass]));
        }

        //otherwise use default convention
        //convert the class name to kebab url and return the url
        $modelName = Str::plural(Arr::last(explode('\\', $modelClass)));
        $modelName = Str::kebab(Str::camel($modelName));

        return URL::to('/' . $modelName . '/' . $model->id);
    }
}
