<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdctsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodcts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('title_en');
            $table->string('SKU');
            $table->float('Price');
            $table->float('OldPrice')->nullable();
            $table->string('ShortDesc');
            $table->longText('LongDesc');
            $table->string('location');
            $table->text('Images');
            $table->integer('Stock');
            $table->boolean('Live')->default(1);
            $table->bigInteger('SellerID')->unsigned();
            $table->bigInteger('CategoryID')->unsigned();
            $table->foreign('SellerID')->on('suppliers')->references('id');
            $table->foreign('CategoryID')->on('sub_caters')->references('id');
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
        Schema::dropIfExists('prodcts');
    }
}
