<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Invoices.
 *
 * @author  The scaffold-interface created at 2018-01-06 04:49:45pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Invoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('invoices',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('title')->nullable();
        
        $table->String('description')->nullable();
        
        $table->biginteger('amount_paid')->nullable();
        
        $table->biginteger('amount_due')->nullable();
        
        $table->date('payment_due_date')->nullable();
                
        $table->String('payment_status')->nullable();
        
        $table->longText('note')->nullable();
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('reservation_id')->unsigned()->nullable();
        $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('cascade');
        
        $table->integer('company_id')->unsigned()->nullable();
        $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        
        
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
        Schema::drop('invoices');
    }
}
