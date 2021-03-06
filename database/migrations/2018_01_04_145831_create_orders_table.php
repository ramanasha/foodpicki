<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function (Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('address_id');
            $table->double('amount');
            $table->date('delivery_day');
            $table->time('delivery_time');
            $table->integer('status')->default(0);
            $table->boolean('delivered')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('orders');
    }
}
