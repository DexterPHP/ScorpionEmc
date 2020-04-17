<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('title_en');
            $table->string('price');
            $table->string('desc');
            $table->string('desc_en');
            $table->string('link');
            $table->text('images');
            $table->bigInteger('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->on('prodcts')->references('id');
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
        Schema::dropIfExists('special_offers');
    }
}
