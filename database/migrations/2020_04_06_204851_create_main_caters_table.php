<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainCatersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_caters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->string('title_en')->unique();
            $table->string('desc');
            $table->string('desc_en');
            $table->string('cover_link');
            $table->string('icon_link');
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
        Schema::dropIfExists('main_caters');
    }
}
