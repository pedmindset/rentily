@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show reservation
    </h1>
    <br>
    <a href='{!!url("reservation")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Reservation Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>code</b> </td>
                <td>{!!$reservation->code!!}</td>
            </tr>
            <tr>
                <td> <b>reserve_from</b> </td>
                <td>{!!$reservation->reserve_from!!}</td>
            </tr>
            <tr>
                <td> <b>reserve_to</b> </td>
                <td>{!!$reservation->reserve_to!!}</td>
            </tr>
            <tr>
                <td> <b>status</b> </td>
                <td>{!!$reservation->status!!}</td>
            </tr>
            <tr>
                <td> <b>delivery_method</b> </td>
                <td>{!!$reservation->delivery_method!!}</td>
            </tr>
            <tr>
                <td> <b>return_method</b> </td>
                <td>{!!$reservation->return_method!!}</td>
            </tr>
            <tr>
                <td> <b>payment_method</b> </td>
                <td>{!!$reservation->payment_method!!}</td>
            </tr>
            <tr>
                <td> <b>tax</b> </td>
                <td>{!!$reservation->tax!!}</td>
            </tr>
            <tr>
                <td> <b>discount</b> </td>
                <td>{!!$reservation->discount!!}</td>
            </tr>
            <tr>
                <td> <b>delivery_cost</b> </td>
                <td>{!!$reservation->delivery_cost!!}</td>
            </tr>
            <tr>
                <td> <b>pickup_cost</b> </td>
                <td>{!!$reservation->pickup_cost!!}</td>
            </tr>
            <tr>
                <td> <b>security</b> </td>
                <td>{!!$reservation->security!!}</td>
            </tr>
            <tr>
                <td> <b>deposit</b> </td>
                <td>{!!$reservation->deposit!!}</td>
            </tr>
            <tr>
                <td> <b>note</b> </td>
                <td>{!!$reservation->note!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>name : </i></b>
                </td>
                <td>{!!$reservation->company->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>logo : </i></b>
                </td>
                <td>{!!$reservation->company->logo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>email : </i></b>
                </td>
                <td>{!!$reservation->company->email!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>phone1 : </i></b>
                </td>
                <td>{!!$reservation->company->phone1!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>phone2 : </i></b>
                </td>
                <td>{!!$reservation->company->phone2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>address : </i></b>
                </td>
                <td>{!!$reservation->company->address!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>city : </i></b>
                </td>
                <td>{!!$reservation->company->city!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>region : </i></b>
                </td>
                <td>{!!$reservation->company->region!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>country : </i></b>
                </td>
                <td>{!!$reservation->company->country!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$reservation->company->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$reservation->company->updated_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>deleted_at : </i></b>
                </td>
                <td>{!!$reservation->company->deleted_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>name : </i></b>
                </td>
                <td>{!!$reservation->customer->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>email : </i></b>
                </td>
                <td>{!!$reservation->customer->email!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>phone : </i></b>
                </td>
                <td>{!!$reservation->customer->phone!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>address : </i></b>
                </td>
                <td>{!!$reservation->customer->address!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>city : </i></b>
                </td>
                <td>{!!$reservation->customer->city!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>region : </i></b>
                </td>
                <td>{!!$reservation->customer->region!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>postal_code : </i></b>
                </td>
                <td>{!!$reservation->customer->postal_code!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>country : </i></b>
                </td>
                <td>{!!$reservation->customer->country!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>card_number : </i></b>
                </td>
                <td>{!!$reservation->customer->card_number!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>ccv : </i></b>
                </td>
                <td>{!!$reservation->customer->ccv!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>exp_date : </i></b>
                </td>
                <td>{!!$reservation->customer->exp_date!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>password : </i></b>
                </td>
                <td>{!!$reservation->customer->password!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$reservation->customer->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$reservation->customer->updated_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>deleted_at : </i></b>
                </td>
                <td>{!!$reservation->customer->deleted_at!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection