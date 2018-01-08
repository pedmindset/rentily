<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Company;


/**
 * Class CategoryController.
 *
 * @author  The scaffold-interface created at 2018-01-06 01:26:48am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - category';
        $categories = Category::paginate(6);
        return view('category.index',compact('categories','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - category';
        
        $companies = Company::all()->pluck('name','id');
        
        return view('category.create',compact('title','companies'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();

        
        $category->name = $request->name;

        
        $category->description = $request->description;
        
        
        $category->company_id = $request->company_id;

        
        $category->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new category has been created !!']);

        return redirect('category');
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
        $title = 'Show - category';

        if($request->ajax())
        {
            return URL::to('category/'.$id);
        }

        $category = Category::findOrfail($id);
        return view('category.show',compact('title','category'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - category';
        if($request->ajax())
        {
            return URL::to('category/'. $id . '/edit');
        }

        
        $companies = Company::all()->pluck('name','id');

        
        $category = Category::findOrfail($id);
        return view('category.edit',compact('title','category' ,'companies' ) );
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
        $category = Category::findOrfail($id);
    	
        $category->name = $request->name;
        
        $category->description = $request->description;
        
        $category->slug = $request->slug;
        
        
        $category->company_id = $request->company_id;

        
        $category->save();

        return redirect('category');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/category/'. $id . '/delete');

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
     	$category = Category::findOrfail($id);
     	$category->delete();
        return URL::to('category');
    }
}
