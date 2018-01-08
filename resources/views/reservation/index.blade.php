@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Reservation Index
    </h1>
    <a href='{!!url("reservation")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <br>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Associate <span class="caret"></span> </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="https://rentily.dev/company">Company</a></li>
            <li><a href="https://rentily.dev/customer">Customer</a></li>
        </ul>
    </div>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
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
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>address</th>
            <th>city</th>
            <th>region</th>
            <th>postal_code</th>
            <th>country</th>
            <th>card_number</th>
            <th>ccv</th>
            <th>exp_date</th>
            <th>password</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($reservations as $reservation) 
            <tr>
                <td>{!!$reservation->code!!}</td>
                <td>{!!$reservation->reserve_from!!}</td>
                <td>{!!$reservation->reserve_to!!}</td>
                <td>{!!$reservation->status!!}</td>
                <td>{!!$reservation->delivery_method!!}</td>
                <td>{!!$reservation->return_method!!}</td>
                <td>{!!$reservation->payment_method!!}</td>
                <td>{!!$reservation->tax!!}</td>
                <td>{!!$reservation->discount!!}</td>
                <td>{!!$reservation->delivery_cost!!}</td>
                <td>{!!$reservation->pickup_cost!!}</td>
                <td>{!!$reservation->security!!}</td>
                <td>{!!$reservation->deposit!!}</td>
                <td>{!!$reservation->note!!}</td>
                <td>{!!$reservation->company->name!!}</td>
                <td>{!!$reservation->company->logo!!}</td>
                <td>{!!$reservation->company->email!!}</td>
                <td>{!!$reservation->company->phone1!!}</td>
                <td>{!!$reservation->company->phone2!!}</td>
                <td>{!!$reservation->company->address!!}</td>
                <td>{!!$reservation->company->city!!}</td>
                <td>{!!$reservation->company->region!!}</td>
                <td>{!!$reservation->company->country!!}</td>
                <td>{!!$reservation->company->created_at!!}</td>
                <td>{!!$reservation->company->updated_at!!}</td>
                <td>{!!$reservation->company->deleted_at!!}</td>
                <td>{!!$reservation->customer->name!!}</td>
                <td>{!!$reservation->customer->email!!}</td>
                <td>{!!$reservation->customer->phone!!}</td>
                <td>{!!$reservation->customer->address!!}</td>
                <td>{!!$reservation->customer->city!!}</td>
                <td>{!!$reservation->customer->region!!}</td>
                <td>{!!$reservation->customer->postal_code!!}</td>
                <td>{!!$reservation->customer->country!!}</td>
                <td>{!!$reservation->customer->card_number!!}</td>
                <td>{!!$reservation->customer->ccv!!}</td>
                <td>{!!$reservation->customer->exp_date!!}</td>
                <td>{!!$reservation->customer->password!!}</td>
                <td>{!!$reservation->customer->created_at!!}</td>
                <td>{!!$reservation->customer->updated_at!!}</td>
                <td>{!!$reservation->customer->deleted_at!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/reservation/{!!$reservation->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/reservation/{!!$reservation->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/reservation/{!!$reservation->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $reservations->render() !!}

</section>
@endsection