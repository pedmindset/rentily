@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create company
    </h1>
    <a href="{!!url('company')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Company Index</a>
    <br>
    <form method = 'POST' action = '{!!url("company")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="logo">logo</label>
            <input id="logo" name = "logo" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input id="email" name = "email" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone1">phone1</label>
            <input id="phone1" name = "phone1" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone2">phone2</label>
            <input id="phone2" name = "phone2" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="address">address</label>
            <input id="address" name = "address" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="city">city</label>
            <input id="city" name = "city" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="region">region</label>
            <input id="region" name = "region" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="country">country</label>
            <input id="country" name = "country" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>users Select</label>
            <select name = 'user_id' class = 'form-control'>
                @foreach($users as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection