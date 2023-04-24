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
            $table->string('hy_title');
            $table->integer('adder_id')->nullabe();
            $table->string('ru_title');
            $table->string('en_title');
            $table->string('pic1');
            $table->string('pic2');
            $table->string('pic3');
            $table->string('pic4');
            $table->string('pic5');
            $table->string('hy_desc');
            $table->string('ru_desc');
            $table->string('en_desc');
            $table->string('price');
            $table->string('sale');
            $table->string('type');
            $table->string('fav');
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
