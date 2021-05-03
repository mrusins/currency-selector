<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductRecipeTable extends Migration
{

    public function up()
    {
        Schema::create('product_recipe', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id');
            $table->bigInteger('recipe_id');
            $table->bigInteger('recipe_name');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('product_recipe');
    }
}
