@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Invoice Index
    </h1>
    <a href='{!!url("invoice")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <br>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Associate <span class="caret"></span> </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="https://rentily.dev/reservation">Reservation</a></li>
            <li><a href="https://rentily.dev/company">Company</a></li>
        </ul>
    </div>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>title</th>
            <th>description</th>
            <th>amount_paid</th>
            <th>amount_due</th>
            <th>payment_due_date</th>
            <th>payment_status</th>
            <th>payment_status</th>
            <th>note</th>
            <th>code</th>
            <th>reserve_from</th>
            <th>reserve_to</th>
            <th>status</th>
            <th>delivery_method</th>
            <th>return_method</th>
            <th>payment_method</th>
            <th>tax</th>
            <th>discount</th>
            <th>delivery_cost</th>
            <th>pickup_cost</th>
            <th>security</th>
            <th>deposit</th>
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
            @foreach($invoices as $invoice) 
            <tr>
                <td>{!!$invoice->title!!}</td>
                <td>{!!$invoice->description!!}</td>
                <td>{!!$invoice->amount_paid!!}</td>
                <td>{!!$invoice->amount_due!!}</td>
                <td>{!!$invoice->payment_due_date!!}</td>
                <td>{!!$invoice->payment_status!!}</td>
                <td>{!!$invoice->payment_status!!}</td>
                <td>{!!$invoice->note!!}</td>
                <td>{!!$invoice->reservation->code!!}</td>
                <td>{!!$invoice->reservation->reserve_from!!}</td>
                <td>{!!$invoice->reservation->reserve_to!!}</td>
                <td>{!!$invoice->reservation->status!!}</td>
                <td>{!!$invoice->reservation->delivery_method!!}</td>
                <td>{!!$invoice->reservation->return_method!!}</td>
                <td>{!!$invoice->reservation->payment_method!!}</td>
                <td>{!!$invoice->reservation->tax!!}</td>
                <td>{!!$invoice->reservation->discount!!}</td>
                <td>{!!$invoice->reservation->delivery_cost!!}</td>
                <td>{!!$invoice->reservation->pickup_cost!!}</td>
                <td>{!!$invoice->reservation->security!!}</td>
                <td>{!!$invoice->reservation->deposit!!}</td>
                <td>{!!$invoice->reservation->note!!}</td>
                <td>{!!$invoice->reservation->created_at!!}</td>
                <td>{!!$invoice->reservation->updated_at!!}</td>
                <td>{!!$invoice->reservation->deleted_at!!}</td>
                <td>{!!$invoice->company->name!!}</td>
                <td>{!!$invoice->company->logo!!}</td>
                <td>{!!$invoice->company->email!!}</td>
                <td>{!!$invoice->company->phone1!!}</td>
                <td>{!!$invoice->company->phone2!!}</td>
                <td>{!!$invoice->company->address!!}</td>
                <td>{!!$invoice->company->city!!}</td>
                <td>{!!$invoice->company->region!!}</td>
                <td>{!!$invoice->company->country!!}</td>
                <td>{!!$invoice->company->created_at!!}</td>
                <td>{!!$invoice->company->updated_at!!}</td>
                <td>{!!$invoice->company->deleted_at!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/invoice/{!!$invoice->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/invoice/{!!$invoice->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/invoice/{!!$invoice->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $invoices->render() !!}

</section>
@endsection