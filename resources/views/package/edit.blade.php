@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit package
    </h1>
    <a href="{!!url('package')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Package Index</a>
    <br>
    <form method = 'POST' action = '{!! url("package")!!}/{!!$package->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$package->
            name!!}"> 
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control" value="{!!$package->
            description!!}"> 
        </div>
        <div class="form-group">
            <label for="status">status</label>
            <input id="status" name = "status" type="text" class="form-control" value="{!!$package->
            status!!}"> 
        </div>
        <div class="form-group">
            <label>companies Select</label>
            <select name = 'company_id' class = "form-control">
                @foreach($companies as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection