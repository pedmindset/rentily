@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit payment
    </h1>
    <a href="{!!url('payment')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Payment Index</a>
    <br>
    <form method = 'POST' action = '{!! url("payment")!!}/{!!$payment->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="title">title</label>
            <input id="title" name = "title" type="text" class="form-control" value="{!!$payment->
            title!!}"> 
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control" value="{!!$payment->
            description!!}"> 
        </div>
        <div class="form-group">
            <label for="payment_type">payment_type</label>
            <input id="payment_type" name = "payment_type" type="text" class="form-control" value="{!!$payment->
            payment_type!!}"> 
        </div>
        <div class="form-group">
            <label for="amount">amount</label>
            <input id="amount" name = "amount" type="text" class="form-control" value="{!!$payment->
            amount!!}"> 
        </div>
        <div class="form-group">
            <label for="method">method</label>
            <input id="method" name = "method" type="text" class="form-control" value="{!!$payment->
            method!!}"> 
        </div>
        <div class="form-group">
            <label for="note">note</label>
            <input id="note" name = "note" type="text" class="form-control" value="{!!$payment->
            note!!}"> 
        </div>
        <div class="form-group">
            <label>invoices Select</label>
            <select name = 'invoice_id' class = "form-control">
                @foreach($invoices as $key => $value) 
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