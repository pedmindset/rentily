@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Payment Index
    </h1>
    <a href='{!!url("payment")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <br>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Associate <span class="caret"></span> </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="https://rentily.dev/invoice">Invoice</a></li>
            <li><a href="https://rentily.dev/company">Company</a></li>
        </ul>
    </div>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>title</th>
            <th>description</th>
            <th>payment_type</th>
            <th>amount</th>
            <th>method</th>
            <th>note</th>
            <th>title</th>
            <th>description</th>
            <th>amount_due</th>
            <th>payment_due_date</th>
            <th>payment_status</th>
            <th>note</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
            <th>name</th>
            <th>logo</th>
            <th>email</th>
            <th>phone1</th>
            <th>phone2</th>
            <th>address</th>
            <th>city</th>
            <th>region</th>
            <th>country</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($payments as $payment) 
            <tr>
                <td>{!!$payment->title!!}</td>
                <td>{!!$payment->description!!}</td>
                <td>{!!$payment->payment_type!!}</td>
                <td>{!!$payment->amount!!}</td>
                <td>{!!$payment->method!!}</td>
                <td>{!!$payment->note!!}</td>
                <td>{!!$payment->invoice->title!!}</td>
                <td>{!!$payment->invoice->description!!}</td>
                <td>{!!$payment->invoice->amount_due!!}</td>
                <td>{!!$payment->invoice->payment_due_date!!}</td>
                <td>{!!$payment->invoice->payment_status!!}</td>
                <td>{!!$payment->invoice->note!!}</td>
                <td>{!!$payment->invoice->created_at!!}</td>
                <td>{!!$payment->invoice->updated_at!!}</td>
                <td>{!!$payment->invoice->deleted_at!!}</td>
                <td>{!!$payment->company->name!!}</td>
                <td>{!!$payment->company->logo!!}</td>
                <td>{!!$payment->company->email!!}</td>
                <td>{!!$payment->company->phone1!!}</td>
                <td>{!!$payment->company->phone2!!}</td>
                <td>{!!$payment->company->address!!}</td>
                <td>{!!$payment->company->city!!}</td>
                <td>{!!$payment->company->region!!}</td>
                <td>{!!$payment->company->country!!}</td>
                <td>{!!$payment->company->created_at!!}</td>
                <td>{!!$payment->company->updated_at!!}</td>
                <td>{!!$payment->company->deleted_at!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/payment/{!!$payment->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/payment/{!!$payment->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/payment/{!!$payment->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $payments->render() !!}

</section>
@endsection