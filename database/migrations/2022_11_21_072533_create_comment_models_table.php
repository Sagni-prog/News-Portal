<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('comment_models', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->morphs('commentable');
            $table->text('comment')->nullable();
            $table->boolean('is_comment_edited')->nullable()->default(false);
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('comment_models');
    }
};
