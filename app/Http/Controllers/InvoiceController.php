<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Invoice;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Reservation;


use App\Company;


/**
 * Class InvoiceController.
 *
 * @author  The scaffold-interface created at 2018-01-06 04:49:45pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - invoice';
        $invoices = Invoice::paginate(6);
        return view('invoice.index',compact('invoices','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - invoice';
        
        $reservations = Reservation::all()->pluck('code','id');
        
        $companies = Company::all()->pluck('name','id');
        
        return view('invoice.create',compact('title','reservations' , 'companies'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = new Invoice();

        
        $invoice->title = $request->title;

        
        $invoice->description = $request->description;

        
        $invoice->amount_paid = $request->amount_paid;

        
        $invoice->amount_due = $request->amount_due;

        
        $invoice->payment_due_date = $request->payment_due_date;

        
        $invoice->payment_status = $request->payment_status;

        
        $invoice->note = $request->note;

        
        
        $invoice->reservation_id = $request->reservation_id;

        
        $invoice->company_id = $request->company_id;

        
        $invoice->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new invoice has been created !!']);

        return redirect('invoice');
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
        $title = 'Show - invoice';

        if($request->ajax())
        {
            return URL::to('invoice/'.$id);
        }

        $invoice = Invoice::findOrfail($id);
        return view('invoice.show',compact('title','invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - invoice';
        if($request->ajax())
        {
            return URL::to('invoice/'. $id . '/edit');
        }

        
        $reservations = Reservation::all()->pluck('code','id');

        
        $companies = Company::all()->pluck('name','id');

        
        $invoice = Invoice::findOrfail($id);
        return view('invoice.edit',compact('title','invoice' ,'reservations', 'companies' ) );
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
        $invoice = Invoice::findOrfail($id);
    	
        $invoice->title = $request->title;
        
        $invoice->description = $request->description;
        
        $invoice->amount_paid = $request->amount_paid;
        
        $invoice->amount_due = $request->amount_due;
        
        $invoice->payment_due_date = $request->payment_due_date;
        
        $invoice->payment_status = $request->payment_status;
        
        $invoice->payment_status = $request->payment_status;
        
        $invoice->note = $request->note;
        
        
        $invoice->reservation_id = $request->reservation_id;

        
        $invoice->company_id = $request->company_id;

        
        $invoice->save();

        return redirect('invoice');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/invoice/'. $id . '/delete');

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
     	$invoice = Invoice::findOrfail($id);
     	$invoice->delete();
        return URL::to('invoice');
    }
}
