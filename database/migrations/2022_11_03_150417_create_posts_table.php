<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id')->unsigned()->nullable();
            $table->integer('author_id')->unsigned()->nullable();
            $table->string('post_title');
            $table->text('post_detail');
            $table->integer('sub_catagory_id')->unsigned()->nullable();
            $table->integer('visitors')->unsigned()->nullable()->default(0);
            $table->boolean('is_sharable')->nullable()->default(true);
            $table->boolean('is_commentable')->nullable()->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
