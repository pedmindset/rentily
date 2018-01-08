@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show company
    </h1>
    <br>
    <a href='{!!url("company")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Company Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>name</b> </td>
                <td>{!!$company->name!!}</td>
            </tr>
            <tr>
                <td> <b>logo</b> </td>
                <td>{!!$company->logo!!}</td>
            </tr>
            <tr>
                <td> <b>email</b> </td>
                <td>{!!$company->email!!}</td>
            </tr>
            <tr>
                <td> <b>phone1</b> </td>
                <td>{!!$company->phone1!!}</td>
            </tr>
            <tr>
                <td> <b>phone2</b> </td>
                <td>{!!$company->phone2!!}</td>
            </tr>
            <tr>
                <td> <b>address</b> </td>
                <td>{!!$company->address!!}</td>
            </tr>
            <tr>
                <td> <b>city</b> </td>
                <td>{!!$company->city!!}</td>
            </tr>
            <tr>
                <td> <b>region</b> </td>
                <td>{!!$company->region!!}</td>
            </tr>
            <tr>
                <td> <b>country</b> </td>
                <td>{!!$company->country!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>name : </i></b>
                </td>
                <td>{!!$company->user->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>email : </i></b>
                </td>
                <td>{!!$company->user->email!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>password : </i></b>
                </td>
                <td>{!!$company->user->password!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>remember_token : </i></b>
                </td>
                <td>{!!$company->user->remember_token!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$company->user->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$company->user->updated_at!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection