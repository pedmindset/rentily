@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Company Index
    </h1>
    <a href='{!!url("company")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <br>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Associate <span class="caret"></span> </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="https://rentily.dev/user">User</a></li>
        </ul>
    </div>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>name</th>
            <th>logo</th>
            <th>email</th>
            <th>phone1</th>
            <th>phone2</th>
            <th>address</th>
            <th>city</th>
            <th>region</th>
            <th>country</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>remember_token</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($companies as $company) 
            <tr>
                <td>{!!$company->name!!}</td>
                <td>{!!$company->logo!!}</td>
                <td>{!!$company->email!!}</td>
                <td>{!!$company->phone1!!}</td>
                <td>{!!$company->phone2!!}</td>
                <td>{!!$company->address!!}</td>
                <td>{!!$company->city!!}</td>
                <td>{!!$company->region!!}</td>
                <td>{!!$company->country!!}</td>
                <td>{!!$company->user->name!!}</td>
                <td>{!!$company->user->email!!}</td>
                <td>{!!$company->user->password!!}</td>
                <td>{!!$company->user->remember_token!!}</td>
                <td>{!!$company->user->created_at!!}</td>
                <td>{!!$company->user->updated_at!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/company/{!!$company->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/company/{!!$company->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/company/{!!$company->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $companies->render() !!}

</section>
@endsection