<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservation;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Company;


use App\Customer;


/**
 * Class ReservationController.
 *
 * @author  The scaffold-interface created at 2018-01-06 02:51:45pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - reservation';
        $reservations = Reservation::paginate(6);
        return view('reservation.index',compact('reservations','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - reservation';
        
        $companies = Company::all()->pluck('name','id');
        
        $customers = Customer::all()->pluck('name','id');
        
        return view('reservation.create',compact('title','companies' , 'customers'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservation = new Reservation();

        
        $reservation->code = $request->code;

        
        $reservation->reserve_from = $request->reserve_from;

        
        $reservation->reserve_to = $request->reserve_to;

        
        $reservation->status = $request->status;

        
        $reservation->delivery_method = $request->delivery_method;

        
        $reservation->return_method = $request->return_method;

        
        $reservation->payment_method = $request->payment_method;

        
        $reservation->tax = $request->tax;

        
        $reservation->discount = $request->discount;

        
        $reservation->delivery_cost = $request->delivery_cost;

        
        $reservation->pickup_cost = $request->pickup_cost;

        
        $reservation->security = $request->security;

        
        $reservation->deposit = $request->deposit;

        
        $reservation->note = $request->note;

        
        
        $reservation->company_id = $request->company_id;

        
        $reservation->customer_id = $request->customer_id;

        
        $reservation->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new reservation has been created !!']);

        return redirect('reservation');
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
        $title = 'Show - reservation';

        if($request->ajax())
        {
            return URL::to('reservation/'.$id);
        }

        $reservation = Reservation::findOrfail($id);
        return view('reservation.show',compact('title','reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - reservation';
        if($request->ajax())
        {
            return URL::to('reservation/'. $id . '/edit');
        }

        
        $companies = Company::all()->pluck('name','id');

        
        $customers = Customer::all()->pluck('name','id');

        
        $reservation = Reservation::findOrfail($id);
        return view('reservation.edit',compact('title','reservation' ,'companies', 'customers' ) );
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
        $reservation = Reservation::findOrfail($id);
    	
        $reservation->code = $request->code;
        
        $reservation->reserve_from = $request->reserve_from;
        
        $reservation->reserve_to = $request->reserve_to;
        
        $reservation->status = $request->status;
        
        $reservation->delivery_method = $request->delivery_method;
        
        $reservation->return_method = $request->return_method;
        
        $reservation->payment_method = $request->payment_method;
        
        $reservation->tax = $request->tax;
        
        $reservation->discount = $request->discount;
        
        $reservation->delivery_cost = $request->delivery_cost;
        
        $reservation->pickup_cost = $request->pickup_cost;
        
        $reservation->security = $request->security;
        
        $reservation->deposit = $request->deposit;
        
        $reservation->note = $request->note;
        
        
        $reservation->company_id = $request->company_id;

        
        $reservation->customer_id = $request->customer_id;

        
        $reservation->save();

        return redirect('reservation');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/reservation/'. $id . '/delete');

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
     	$reservation = Reservation::findOrfail($id);
     	$reservation->delete();
        return URL::to('reservation');
    }
}
