@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show category
    </h1>
    <br>
    <a href='{!!url("category")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Category Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>name</b> </td>
                <td>{!!$category->name!!}</td>
            </tr>
            <tr>
                <td> <b>description</b> </td>
                <td>{!!$category->description!!}</td>
            </tr>
            <tr>
                <td> <b>slug</b> </td>
                <td>{!!$category->slug!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>name : </i></b>
                </td>
                <td>{!!$category->company->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>logo : </i></b>
                </td>
                <td>{!!$category->company->logo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>email : </i></b>
                </td>
                <td>{!!$category->company->email!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>phone1 : </i></b>
                </td>
                <td>{!!$category->company->phone1!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>phone2 : </i></b>
                </td>
                <td>{!!$category->company->phone2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>address : </i></b>
                </td>
                <td>{!!$category->company->address!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>city : </i></b>
                </td>
                <td>{!!$category->company->city!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>region : </i></b>
                </td>
                <td>{!!$category->company->region!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>country : </i></b>
                </td>
                <td>{!!$category->company->country!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$category->company->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$category->company->updated_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>deleted_at : </i></b>
                </td>
                <td>{!!$category->company->deleted_at!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection