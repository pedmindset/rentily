@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show customer
    </h1>
    <br>
    <a href='{!!url("customer")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Customer Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>name</b> </td>
                <td>{!!$customer->name!!}</td>
            </tr>
            <tr>
                <td> <b>email</b> </td>
                <td>{!!$customer->email!!}</td>
            </tr>
            <tr>
                <td> <b>phone</b> </td>
                <td>{!!$customer->phone!!}</td>
            </tr>
            <tr>
                <td> <b>address</b> </td>
                <td>{!!$customer->address!!}</td>
            </tr>
            <tr>
                <td> <b>city</b> </td>
                <td>{!!$customer->city!!}</td>
            </tr>
            <tr>
                <td> <b>region</b> </td>
                <td>{!!$customer->region!!}</td>
            </tr>
            <tr>
                <td> <b>postal_code</b> </td>
                <td>{!!$customer->postal_code!!}</td>
            </tr>
            <tr>
                <td> <b>country</b> </td>
                <td>{!!$customer->country!!}</td>
            </tr>
            <tr>
                <td> <b>card_number</b> </td>
                <td>{!!$customer->card_number!!}</td>
            </tr>
            <tr>
                <td> <b>ccv</b> </td>
                <td>{!!$customer->ccv!!}</td>
            </tr>
            <tr>
                <td> <b>exp_date</b> </td>
                <td>{!!$customer->exp_date!!}</td>
            </tr>
            <tr>
                <td> <b>password</b> </td>
                <td>{!!$customer->password!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>name : </i></b>
                </td>
                <td>{!!$customer->company->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>logo : </i></b>
                </td>
                <td>{!!$customer->company->logo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>email : </i></b>
                </td>
                <td>{!!$customer->company->email!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>phone1 : </i></b>
                </td>
                <td>{!!$customer->company->phone1!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>phone2 : </i></b>
                </td>
                <td>{!!$customer->company->phone2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>address : </i></b>
                </td>
                <td>{!!$customer->company->address!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>city : </i></b>
                </td>
                <td>{!!$customer->company->city!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>region : </i></b>
                </td>
                <td>{!!$customer->company->region!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>country : </i></b>
                </td>
                <td>{!!$customer->company->country!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$customer->company->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$customer->company->updated_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>deleted_at : </i></b>
                </td>
                <td>{!!$customer->company->deleted_at!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection