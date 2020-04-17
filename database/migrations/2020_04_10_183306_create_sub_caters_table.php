<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCatersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_caters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('title_en')->unique();
            $table->string('desc');
            $table->string('desc_en');
            $table->string('icon');
            $table->bigInteger('cater_id')->unsigned();
            $table->foreign('cater_id')->on('main_caters')->references('id');
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
        Schema::dropIfExists('sub_caters');
    }
}
