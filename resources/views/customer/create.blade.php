@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create customer
    </h1>
    <a href="{!!url('customer')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Customer Index</a>
    <br>
    <form method = 'POST' action = '{!!url("customer")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input id="email" name = "email" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone">phone</label>
            <input id="phone" name = "phone" type="text" class="form-control">
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
            <label for="postal_code">postal_code</label>
            <input id="postal_code" name = "postal_code" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="country">country</label>
            <input id="country" name = "country" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="card_number">card_number</label>
            <input id="card_number" name = "card_number" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="ccv">ccv</label>
            <input id="ccv" name = "ccv" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="exp_date">exp_date</label>
            <input id="exp_date" name = "exp_date" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input id="password" name = "password" type="text" class="form-control">
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