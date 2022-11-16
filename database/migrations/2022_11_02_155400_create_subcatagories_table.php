<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('subcatagories', function (Blueprint $table) {
            $table->id();
            $table->integer('catagory_id')->unsigned()->nullable();
            $table->string('sub_catagory_name')->nullable();
            $table->string('show_on_menu')->nullable();
            $table->integer('sub_catagory_order')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('subcatagories');
    }
};
