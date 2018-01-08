<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemsReservations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('item_reservation',function (Blueprint $table){
            $table->primary(['item_id', 'reservation_id']);
            $table->biginteger('price');
            $table->integer('quantity');
			$table->integer('item_id')->unsigned()->index();
			$table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
			$table->integer('reservation_id')->unsigned()->index();
			$table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('cascade');
			/**
			 * Type your addition here
			 *
			 */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('item_reservation');
    }
}
