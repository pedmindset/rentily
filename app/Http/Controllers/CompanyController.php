<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\User;


/**
 * Class CompanyController.
 *
 * @author  The scaffold-interface created at 2018-01-05 02:01:13am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - company';
        $companies = Company::paginate(6);
        return view('company.index',compact('companies','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - company';
        
        $users = User::all()->pluck('name','id');
        
        return view('company.create',compact('title','users'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company();

        
        $company->name = $request->name;

        
        $company->logo = $request->logo;

        
        $company->email = $request->email;

        
        $company->phone1 = $request->phone1;

        
        $company->phone2 = $request->phone2;

        
        $company->address = $request->address;

        
        $company->city = $request->city;

        
        $company->region = $request->region;

        
        $company->country = $request->country;

        
        
        $company->user_id = $request->user_id;

        
        $company->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new company has been created !!']);

        return redirect('company');
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
        $title = 'Show - company';

        if($request->ajax())
        {
            return URL::to('company/'.$id);
        }

        $company = Company::findOrfail($id);
        return view('company.show',compact('title','company'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - company';
        if($request->ajax())
        {
            return URL::to('company/'. $id . '/edit');
        }

        
        $users = User::all()->pluck('name','id');

        
        $company = Company::findOrfail($id);
        return view('company.edit',compact('title','company' ,'users' ) );
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
        $company = Company::findOrfail($id);
    	
        $company->name = $request->name;
        
        $company->logo = $request->logo;
        
        $company->email = $request->email;
        
        $company->phone1 = $request->phone1;
        
        $company->phone2 = $request->phone2;
        
        $company->address = $request->address;
        
        $company->city = $request->city;
        
        $company->region = $request->region;
        
        $company->country = $request->country;
        
        
        $company->user_id = $request->user_id;

        
        $company->save();

        return redirect('company');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/company/'. $id . '/delete');

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
     	$company = Company::findOrfail($id);
     	$company->delete();
        return URL::to('company');
    }
}
