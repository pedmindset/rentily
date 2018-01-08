@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Item Index
    </h1>
    <a href='{!!url("item")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <br>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Associate <span class="caret"></span> </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="https://rentily.dev/category">Category</a></li>
            <li><a href="https://rentily.dev/company">Company</a></li>
        </ul>
    </div>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>name</th>
            <th>description</th>
            <th>quantity</th>
            <th>price</th>
            <th>status</th>
            <th>name</th>
            <th>description</th>
            <th>slug</th>
            <th>created_at</th>
            <th>updated_at</th>
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
            @foreach($items as $item) 
            <tr>
                <td>{!!$item->name!!}</td>
                <td>{!!$item->description!!}</td>
                <td>{!!$item->quantity!!}</td>
                <td>{!!$item->price!!}</td>
                <td>{!!$item->status!!}</td>
                <td>{!!$item->category->name!!}</td>
                <td>{!!$item->category->description!!}</td>
                <td>{!!$item->category->slug!!}</td>
                <td>{!!$item->category->created_at!!}</td>
                <td>{!!$item->category->updated_at!!}</td>
                <td>{!!$item->company->name!!}</td>
                <td>{!!$item->company->logo!!}</td>
                <td>{!!$item->company->email!!}</td>
                <td>{!!$item->company->phone1!!}</td>
                <td>{!!$item->company->phone2!!}</td>
                <td>{!!$item->company->address!!}</td>
                <td>{!!$item->company->city!!}</td>
                <td>{!!$item->company->region!!}</td>
                <td>{!!$item->company->country!!}</td>
                <td>{!!$item->company->created_at!!}</td>
                <td>{!!$item->company->updated_at!!}</td>
                <td>{!!$item->company->deleted_at!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/item/{!!$item->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/item/{!!$item->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/item/{!!$item->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $items->render() !!}

</section>
@endsection