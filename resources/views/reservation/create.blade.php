@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create reservation
    </h1>
    <a href="{!!url('reservation')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Reservation Index</a>
    <br>
    <form method = 'POST' action = '{!!url("reservation")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="code">code</label>
            <input id="code" name = "code" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="reserve_from">reserve_from</label>
            <input id="reserve_from" name = "reserve_from" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="reserve_to">reserve_to</label>
            <input id="reserve_to" name = "reserve_to" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="status">status</label>
            <input id="status" name = "status" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="delivery_method">delivery_method</label>
            <input id="delivery_method" name = "delivery_method" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="return_method">return_method</label>
            <input id="return_method" name = "return_method" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="payment_method">payment_method</label>
            <input id="payment_method" name = "payment_method" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="tax">tax</label>
            <input id="tax" name = "tax" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="discount">discount</label>
            <input id="discount" name = "discount" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="delivery_cost">delivery_cost</label>
            <input id="delivery_cost" name = "delivery_cost" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="pickup_cost">pickup_cost</label>
            <input id="pickup_cost" name = "pickup_cost" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="security">security</label>
            <input id="security" name = "security" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="deposit">deposit</label>
            <input id="deposit" name = "deposit" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="note">note</label>
            <input id="note" name = "note" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>companies Select</label>
            <select name = 'company_id' class = 'form-control'>
                @foreach($companies as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label>customers Select</label>
            <select name = 'customer_id' class = 'form-control'>
                @foreach($customers as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection