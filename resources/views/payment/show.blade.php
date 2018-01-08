@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show payment
    </h1>
    <br>
    <a href='{!!url("payment")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Payment Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>title</b> </td>
                <td>{!!$payment->title!!}</td>
            </tr>
            <tr>
                <td> <b>description</b> </td>
                <td>{!!$payment->description!!}</td>
            </tr>
            <tr>
                <td> <b>payment_type</b> </td>
                <td>{!!$payment->payment_type!!}</td>
            </tr>
            <tr>
                <td> <b>amount</b> </td>
                <td>{!!$payment->amount!!}</td>
            </tr>
            <tr>
                <td> <b>method</b> </td>
                <td>{!!$payment->method!!}</td>
            </tr>
            <tr>
                <td> <b>note</b> </td>
                <td>{!!$payment->note!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>title : </i></b>
                </td>
                <td>{!!$payment->invoice->title!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>description : </i></b>
                </td>
                <td>{!!$payment->invoice->description!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>amount_due : </i></b>
                </td>
                <td>{!!$payment->invoice->amount_due!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>payment_due_date : </i></b>
                </td>
                <td>{!!$payment->invoice->payment_due_date!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>payment_status : </i></b>
                </td>
                <td>{!!$payment->invoice->payment_status!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>note : </i></b>
                </td>
                <td>{!!$payment->invoice->note!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$payment->invoice->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$payment->invoice->updated_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>deleted_at : </i></b>
                </td>
                <td>{!!$payment->invoice->deleted_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>name : </i></b>
                </td>
                <td>{!!$payment->company->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>logo : </i></b>
                </td>
                <td>{!!$payment->company->logo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>email : </i></b>
                </td>
                <td>{!!$payment->company->email!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>phone1 : </i></b>
                </td>
                <td>{!!$payment->company->phone1!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>phone2 : </i></b>
                </td>
                <td>{!!$payment->company->phone2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>address : </i></b>
                </td>
                <td>{!!$payment->company->address!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>city : </i></b>
                </td>
                <td>{!!$payment->company->city!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>region : </i></b>
                </td>
                <td>{!!$payment->company->region!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>country : </i></b>
                </td>
                <td>{!!$payment->company->country!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$payment->company->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$payment->company->updated_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>deleted_at : </i></b>
                </td>
                <td>{!!$payment->company->deleted_at!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection