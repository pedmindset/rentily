@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit customer
    </h1>
    <a href="{!!url('customer')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Customer Index</a>
    <br>
    <form method = 'POST' action = '{!! url("customer")!!}/{!!$customer->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$customer->
            name!!}"> 
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input id="email" name = "email" type="text" class="form-control" value="{!!$customer->
            email!!}"> 
        </div>
        <div class="form-group">
            <label for="phone">phone</label>
            <input id="phone" name = "phone" type="text" class="form-control" value="{!!$customer->
            phone!!}"> 
        </div>
        <div class="form-group">
            <label for="address">address</label>
            <input id="address" name = "address" type="text" class="form-control" value="{!!$customer->
            address!!}"> 
        </div>
        <div class="form-group">
            <label for="city">city</label>
            <input id="city" name = "city" type="text" class="form-control" value="{!!$customer->
            city!!}"> 
        </div>
        <div class="form-group">
            <label for="region">region</label>
            <input id="region" name = "region" type="text" class="form-control" value="{!!$customer->
            region!!}"> 
        </div>
        <div class="form-group">
            <label for="postal_code">postal_code</label>
            <input id="postal_code" name = "postal_code" type="text" class="form-control" value="{!!$customer->
            postal_code!!}"> 
        </div>
        <div class="form-group">
            <label for="country">country</label>
            <input id="country" name = "country" type="text" class="form-control" value="{!!$customer->
            country!!}"> 
        </div>
        <div class="form-group">
            <label for="card_number">card_number</label>
            <input id="card_number" name = "card_number" type="text" class="form-control" value="{!!$customer->
            card_number!!}"> 
        </div>
        <div class="form-group">
            <label for="ccv">ccv</label>
            <input id="ccv" name = "ccv" type="text" class="form-control" value="{!!$customer->
            ccv!!}"> 
        </div>
        <div class="form-group">
            <label for="exp_date">exp_date</label>
            <input id="exp_date" name = "exp_date" type="text" class="form-control" value="{!!$customer->
            exp_date!!}"> 
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input id="password" name = "password" type="text" class="form-control" value="{!!$customer->
            password!!}"> 
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