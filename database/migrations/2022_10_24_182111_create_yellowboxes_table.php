<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYellowboxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yellowboxes', function (Blueprint $table) {
            $table->id();
            $table->text('pic1');
            $table->text('pic2');
            $table->text('hy_short');
            $table->text('ru_short');
            $table->text('en_short');
            $table->text('hy_title');
            $table->text('ru_title');
            $table->text('en_title');
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
        Schema::dropIfExists('yellowboxes');
    }
}
