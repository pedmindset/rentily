<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Category;


use App\Company;


/**
 * Class ItemController.
 *
 * @author  The scaffold-interface created at 2018-01-06 03:38:15am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - item';
        $items = Item::paginate(6);
        return view('item.index',compact('items','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - item';
        
        $categories = Category::all()->pluck('name','id');
        
        $companies = Company::all()->pluck('name','id');
        
        return view('item.create',compact('title','categories' , 'companies'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Item();

        
        $item->name = $request->name;

        
        $item->description = $request->description;

        
        $item->quantity = $request->quantity;

        
        $item->price_per_hour = $request->price_per_hour;

        $item->price_per_day = $request->price_per_day;

        
        $item->status = $request->status;

        
        
        $item->category_id = $request->category_id;

        
        $item->company_id = $request->company_id;

        
        $item->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new item has been created !!']);

        return redirect('item');
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
        $title = 'Show - item';

        if($request->ajax())
        {
            return URL::to('item/'.$id);
        }

        $item = Item::findOrfail($id);
        return view('item.show',compact('title','item'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - item';
        if($request->ajax())
        {
            return URL::to('item/'. $id . '/edit');
        }

        
        $categories = Category::all()->pluck('name','id');

        
        $companies = Company::all()->pluck('name','id');

        
        $item = Item::findOrfail($id);
        return view('item.edit',compact('title','item' ,'categories', 'companies' ) );
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
        $item = Item::findOrfail($id);
    	
        $item->name = $request->name;
        
        $item->description = $request->description;
        
        $item->quantity = $request->quantity;
        
        $item->price = $request->price;
        
        $item->status = $request->status;
        
        
        $item->category_id = $request->category_id;

        
        $item->company_id = $request->company_id;

        
        $item->save();

        return redirect('item');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/item/'. $id . '/delete');

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
     	$item = Item::findOrfail($id);
     	$item->delete();
        return URL::to('item');
    }
}
