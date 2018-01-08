<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Reservations.
 *
 * @author  The scaffold-interface created at 2018-01-06 02:51:45pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Reservations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('reservations',function (Blueprint $table){

        $table->increments('id');
        
        $table->biginteger('code');
        
        $table->date('reserve_from');
        
        $table->date('reserve_to');
        
        $table->String('status');
        
        $table->String('delivery_method');
        
        $table->String('return_method');
        
        $table->String('payment_method')->nullable();
        
        $table->biginteger('tax')->nullable();
        
        $table->biginteger('discount')->nullable();
        
        $table->biginteger('delivery_cost')->nullable();
        
        $table->biginteger('pickup_cost')->nullable();
        
        $table->biginteger('security')->nullable();
        
        $table->biginteger('deposit')->nullable();

        $table->biginteger('total')->nullable();
        
        $table->longText('note')->nullable();
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('company_id')->unsigned()->nullable();
        $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        
        $table->integer('customer_id')->unsigned()->nullable();
        $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('reservations');
    }
}
