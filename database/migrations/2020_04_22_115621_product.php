<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',150);
            $table->string('slug',150)->unique();
            $table->string('image',150);
            $table->string('image_list');
            $table->integer('price');
            $table->integer('sale_price');
            $table->integer('category_id')->unsigned();
            $table->tinyInteger('status')->nullalbe()->default(1);
            $table->text('content');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
