@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create item
    </h1>
    <a href="{!!url('item')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Item Index</a>
    <br>
    <form method = 'POST' action = '{!!url("item")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="quantity">quantity</label>
            <input id="quantity" name = "quantity" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input id="price" name = "price" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="status">status</label>
            <input id="status" name = "status" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>categories Select</label>
            <select name = 'category_id' class = 'form-control'>
                @foreach($categories as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label>companies Select</label>
            <select name = 'company_id' class = 'form-control'>
                @foreach($companies as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection