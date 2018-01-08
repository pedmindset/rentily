@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit category
    </h1>
    <a href="{!!url('category')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Category Index</a>
    <br>
    <form method = 'POST' action = '{!! url("category")!!}/{!!$category->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$category->
            name!!}"> 
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control" value="{!!$category->
            description!!}"> 
        </div>
        <div class="form-group">
            <label for="slug">slug</label>
            <input id="slug" name = "slug" type="text" class="form-control" value="{!!$category->
            slug!!}"> 
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