<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->longText('body');
            //$table->string('user_name');
            //$table->foreign('user_name')->references('name')->on('users');
            //$table->string('user_photo');
            // $table->foreign('user_photo')->references('photo')->on('users');
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')->references('id')->on('posts');
            // $table->foreign(['user_name','user_photo','post_id'])->references(['name','photo','id'])->on(['users','users','posts']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
