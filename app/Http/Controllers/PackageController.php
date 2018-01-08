<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Package;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Company;


/**
 * Class PackageController.
 *
 * @author  The scaffold-interface created at 2018-01-06 03:46:02am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - package';
        $packages = Package::paginate(6);
        return view('package.index',compact('packages','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - package';
        
        $companies = Company::all()->pluck('name','id');
        
        return view('package.create',compact('title','companies'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $package = new Package();

        
        $package->name = $request->name;

        
        $package->description = $request->description;

        
        $package->status = $request->status;

        
        
        $package->company_id = $request->company_id;

        
        $package->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new package has been created !!']);

        return redirect('package');
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
        $title = 'Show - package';

        if($request->ajax())
        {
            return URL::to('package/'.$id);
        }

        $package = Package::findOrfail($id);
        return view('package.show',compact('title','package'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - package';
        if($request->ajax())
        {
            return URL::to('package/'. $id . '/edit');
        }

        
        $companies = Company::all()->pluck('name','id');

        
        $package = Package::findOrfail($id);
        return view('package.edit',compact('title','package' ,'companies' ) );
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
        $package = Package::findOrfail($id);
    	
        $package->name = $request->name;
        
        $package->description = $request->description;
        
        $package->status = $request->status;
        
        
        $package->company_id = $request->company_id;

        
        $package->save();

        return redirect('package');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/package/'. $id . '/delete');

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
     	$package = Package::findOrfail($id);
     	$package->delete();
        return URL::to('package');
    }
}
