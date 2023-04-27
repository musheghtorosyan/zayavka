<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stacks', function (Blueprint $table) {
            $table->id();
            $table->integer('adder_id')->nullabe();
            $table->string('ru_title')->nullabe();
            $table->string('pic1')->nullabe();
            $table->string('pic2')->nullabe();
            $table->string('pic3')->nullabe();
            $table->string('pic4')->nullabe();
            $table->string('pic5')->nullabe();
            $table->string('ru_desc')->nullabe();
            $table->string('price')->nullabe();
            $table->string('sale')->nullabe();
            $table->string('type')->nullabe();
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
        Schema::dropIfExists('stacks');
    }
}
