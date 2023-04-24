<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeslidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeslides', function (Blueprint $table) {
            $table->id();
            $table->text('pic');
            $table->text('pic2');
            $table->text('hy_title');
            $table->text('ru_title');
            $table->text('en_title');
            $table->text('hy_short');
            $table->text('ru_short');
            $table->text('en_short');
            $table->text('hy_btn');
            $table->text('ru_btn');
            $table->text('en_btn');
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
        Schema::dropIfExists('homeslides');
    }
}
