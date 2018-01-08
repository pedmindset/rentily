@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Category Index
    </h1>
    <a href='{!!url("category")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
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
            <th>description</th>
            <th>slug</th>
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
            @foreach($categories as $category) 
            <tr>
                <td>{!!$category->name!!}</td>
                <td>{!!$category->description!!}</td>
                <td>{!!$category->slug!!}</td>
                <td>{!!$category->company->name!!}</td>
                <td>{!!$category->company->logo!!}</td>
                <td>{!!$category->company->email!!}</td>
                <td>{!!$category->company->phone1!!}</td>
                <td>{!!$category->company->phone2!!}</td>
                <td>{!!$category->company->address!!}</td>
                <td>{!!$category->company->city!!}</td>
                <td>{!!$category->company->region!!}</td>
                <td>{!!$category->company->country!!}</td>
                <td>{!!$category->company->created_at!!}</td>
                <td>{!!$category->company->updated_at!!}</td>
                <td>{!!$category->company->deleted_at!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/category/{!!$category->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/category/{!!$category->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/category/{!!$category->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $categories->render() !!}

</section>
@endsection