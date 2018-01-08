@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show invoice
    </h1>
    <br>
    <a href='{!!url("invoice")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Invoice Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>title</b> </td>
                <td>{!!$invoice->title!!}</td>
            </tr>
            <tr>
                <td> <b>description</b> </td>
                <td>{!!$invoice->description!!}</td>
            </tr>
            <tr>
                <td> <b>amount_paid</b> </td>
                <td>{!!$invoice->amount_paid!!}</td>
            </tr>
            <tr>
                <td> <b>amount_due</b> </td>
                <td>{!!$invoice->amount_due!!}</td>
            </tr>
            <tr>
                <td> <b>payment_due_date</b> </td>
                <td>{!!$invoice->payment_due_date!!}</td>
            </tr>
            <tr>
                <td> <b>payment_status</b> </td>
                <td>{!!$invoice->payment_status!!}</td>
            </tr>
            <tr>
                <td> <b>payment_status</b> </td>
                <td>{!!$invoice->payment_status!!}</td>
            </tr>
            <tr>
                <td> <b>note</b> </td>
                <td>{!!$invoice->note!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>code : </i></b>
                </td>
                <td>{!!$invoice->reservation->code!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>reserve_from : </i></b>
                </td>
                <td>{!!$invoice->reservation->reserve_from!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>reserve_to : </i></b>
                </td>
                <td>{!!$invoice->reservation->reserve_to!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>status : </i></b>
                </td>
                <td>{!!$invoice->reservation->status!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>delivery_method : </i></b>
                </td>
                <td>{!!$invoice->reservation->delivery_method!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>return_method : </i></b>
                </td>
                <td>{!!$invoice->reservation->return_method!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>payment_method : </i></b>
                </td>
                <td>{!!$invoice->reservation->payment_method!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>tax : </i></b>
                </td>
                <td>{!!$invoice->reservation->tax!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>discount : </i></b>
                </td>
                <td>{!!$invoice->reservation->discount!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>delivery_cost : </i></b>
                </td>
                <td>{!!$invoice->reservation->delivery_cost!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>pickup_cost : </i></b>
                </td>
                <td>{!!$invoice->reservation->pickup_cost!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>security : </i></b>
                </td>
                <td>{!!$invoice->reservation->security!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>deposit : </i></b>
                </td>
                <td>{!!$invoice->reservation->deposit!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>note : </i></b>
                </td>
                <td>{!!$invoice->reservation->note!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$invoice->reservation->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$invoice->reservation->updated_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>deleted_at : </i></b>
                </td>
                <td>{!!$invoice->reservation->deleted_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>name : </i></b>
                </td>
                <td>{!!$invoice->company->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>logo : </i></b>
                </td>
                <td>{!!$invoice->company->logo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>email : </i></b>
                </td>
                <td>{!!$invoice->company->email!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>phone1 : </i></b>
                </td>
                <td>{!!$invoice->company->phone1!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>phone2 : </i></b>
                </td>
                <td>{!!$invoice->company->phone2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>address : </i></b>
                </td>
                <td>{!!$invoice->company->address!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>city : </i></b>
                </td>
                <td>{!!$invoice->company->city!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>region : </i></b>
                </td>
                <td>{!!$invoice->company->region!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>country : </i></b>
                </td>
                <td>{!!$invoice->company->country!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$invoice->company->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$invoice->company->updated_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>deleted_at : </i></b>
                </td>
                <td>{!!$invoice->company->deleted_at!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection