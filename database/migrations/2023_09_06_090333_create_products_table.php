<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');

            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('discription');
            $table->integer('price');
            $table->integer('discount_price');
            $table->string('photo');
            $table->string('slug');
            $table->string('meta_title');
            $table->string('meta_discription');
            $table->string('meta_keyword');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('products');
    }
}
