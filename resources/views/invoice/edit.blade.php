@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit invoice
    </h1>
    <a href="{!!url('invoice')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Invoice Index</a>
    <br>
    <form method = 'POST' action = '{!! url("invoice")!!}/{!!$invoice->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="title">title</label>
            <input id="title" name = "title" type="text" class="form-control" value="{!!$invoice->
            title!!}"> 
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control" value="{!!$invoice->
            description!!}"> 
        </div>
        <div class="form-group">
            <label for="amount_paid">amount_paid</label>
            <input id="amount_paid" name = "amount_paid" type="text" class="form-control" value="{!!$invoice->
            amount_paid!!}"> 
        </div>
        <div class="form-group">
            <label for="amount_due">amount_due</label>
            <input id="amount_due" name = "amount_due" type="text" class="form-control" value="{!!$invoice->
            amount_due!!}"> 
        </div>
        <div class="form-group">
            <label for="payment_due_date">payment_due_date</label>
            <input id="payment_due_date" name = "payment_due_date" type="text" class="form-control" value="{!!$invoice->
            payment_due_date!!}"> 
        </div>
        <div class="form-group">
            <label for="payment_status">payment_status</label>
            <input id="payment_status" name = "payment_status" type="text" class="form-control" value="{!!$invoice->
            payment_status!!}"> 
        </div>
        <div class="form-group">
            <label for="payment_status">payment_status</label>
            <input id="payment_status" name = "payment_status" type="text" class="form-control" value="{!!$invoice->
            payment_status!!}"> 
        </div>
        <div class="form-group">
            <label for="note">note</label>
            <input id="note" name = "note" type="text" class="form-control" value="{!!$invoice->
            note!!}"> 
        </div>
        <div class="form-group">
            <label>reservations Select</label>
            <select name = 'reservation_id' class = "form-control">
                @foreach($reservations as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
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