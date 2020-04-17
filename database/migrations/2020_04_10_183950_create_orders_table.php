<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->float('Amount');
            $table->enum('ShippmentMethod',['Cash','Ecard','Point']);
            $table->string('Tax');
            $table->longText('OrderDetails');
            $table->string('TrackingNmbr');
            $table->integer('Discount')->default(0);
            $table->text('location');
            $table->text('OrderNote');
            $table->string('Country');
            $table->enum('Order_status',['waiting','inprogress','completed'])->default('waiting');
            $table->date('delivery_date');
            $table->foreign('user_id')->on('users')->references('id');
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
        Schema::dropIfExists('orders');
    }
}
