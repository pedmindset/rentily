@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Customer Index
    </h1>
    <a href='{!!url("customer")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <br>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Associate <span class="caret"></span> </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="https://rentily.dev/company">Company</a></li>
        </ul>
    </div>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
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
            @foreach($customers as $customer) 
            <tr>
                <td>{!!$customer->name!!}</td>
                <td>{!!$customer->email!!}</td>
                <td>{!!$customer->phone!!}</td>
                <td>{!!$customer->address!!}</td>
                <td>{!!$customer->city!!}</td>
                <td>{!!$customer->region!!}</td>
                <td>{!!$customer->postal_code!!}</td>
                <td>{!!$customer->country!!}</td>
                <td>{!!$customer->card_number!!}</td>
                <td>{!!$customer->ccv!!}</td>
                <td>{!!$customer->exp_date!!}</td>
                <td>{!!$customer->password!!}</td>
                <td>{!!$customer->company->name!!}</td>
                <td>{!!$customer->company->logo!!}</td>
                <td>{!!$customer->company->email!!}</td>
                <td>{!!$customer->company->phone1!!}</td>
                <td>{!!$customer->company->phone2!!}</td>
                <td>{!!$customer->company->address!!}</td>
                <td>{!!$customer->company->city!!}</td>
                <td>{!!$customer->company->region!!}</td>
                <td>{!!$customer->company->country!!}</td>
                <td>{!!$customer->company->created_at!!}</td>
                <td>{!!$customer->company->updated_at!!}</td>
                <td>{!!$customer->company->deleted_at!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/customer/{!!$customer->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/customer/{!!$customer->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/customer/{!!$customer->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $customers->render() !!}

</section>
@endsection