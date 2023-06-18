<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory, Searchable;

    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['userid','title', 'description', 'location', 'image'];

    public function user(){
        return $this->belongsTo(User::class, 'userid');
    }
}
