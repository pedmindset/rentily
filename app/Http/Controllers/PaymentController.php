<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Payment;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Invoice;


use App\Company;


/**
 * Class PaymentController.
 *
 * @author  The scaffold-interface created at 2018-01-06 05:06:57pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - payment';
        $payments = Payment::paginate(6);
        return view('payment.index',compact('payments','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - payment';
        
        $invoices = Invoice::all()->pluck('title','id');
        
        $companies = Company::all()->pluck('name','id');
        
        return view('payment.create',compact('title','invoices' , 'companies'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payment = new Payment();

        
        $payment->title = $request->title;

        
        $payment->description = $request->description;

        
        $payment->payment_type = $request->payment_type;

        
        $payment->amount = $request->amount;

        
        $payment->method = $request->method;

        
        $payment->note = $request->note;

        
        
        $payment->invoice_id = $request->invoice_id;

        
        $payment->company_id = $request->company_id;

        
        $payment->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new payment has been created !!']);

        return redirect('payment');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - payment';

        if($request->ajax())
        {
            return URL::to('payment/'.$id);
        }

        $payment = Payment::findOrfail($id);
        return view('payment.show',compact('title','payment'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - payment';
        if($request->ajax())
        {
            return URL::to('payment/'. $id . '/edit');
        }

        
        $invoices = Invoice::all()->pluck('title','id');

        
        $companies = Company::all()->pluck('name','id');

        
        $payment = Payment::findOrfail($id);
        return view('payment.edit',compact('title','payment' ,'invoices', 'companies' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $payment = Payment::findOrfail($id);
    	
        $payment->title = $request->title;
        
        $payment->description = $request->description;
        
        $payment->payment_type = $request->payment_type;
        
        $payment->amount = $request->amount;
        
        $payment->method = $request->method;
        
        $payment->note = $request->note;
        
        
        $payment->invoice_id = $request->invoice_id;

        
        $payment->company_id = $request->company_id;

        
        $payment->save();

        return redirect('payment');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/payment/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$payment = Payment::findOrfail($id);
     	$payment->delete();
        return URL::to('payment');
    }
}
