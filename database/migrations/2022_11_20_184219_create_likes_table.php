<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->morphs('likeable');
            $table->timestamps();
        });
    }

    // public function up()
    // {
    //     Schema::table('users', function($table) {
    //         $table->integer('paid');
    //     });
    // }
    public function down()
    {
        Schema::dropIfExists('likes');
    }
};
