<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArdipensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ardipens', function (Blueprint $table) {
            $table->id();
            $table->text('hy_long');
            $table->text('ru_long');
            $table->text('en_long');
            $table->text('hy_short1');
            $table->text('ru_short1');
            $table->text('en_short1');
            $table->text('hy_short2');
            $table->text('ru_short2');
            $table->text('en_short2');
            $table->text('hy_short3');
            $table->text('ru_short3');
            $table->text('en_short3');
            $table->text('hy_short4');
            $table->text('ru_short4');
            $table->text('en_short4');
            $table->text('hy_short5');
            $table->text('ru_short5');
            $table->text('en_short5');
            $table->text('link');
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
        Schema::dropIfExists('ardipens');
    }
}
