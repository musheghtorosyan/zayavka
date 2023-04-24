<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->text('pic');
            $table->text('hy_name');
            $table->text('ru_name');
            $table->text('en_name');
            $table->text('hy_short');
            $table->text('ru_short');
            $table->text('en_short');
            $table->text('hy_long');
            $table->text('ru_long');
            $table->text('en_long');
            $table->text('logo');
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
        Schema::dropIfExists('reviews');
    }
}
