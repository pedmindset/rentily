@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show team
    </h1>
    <br>
    <a href='{!!url("team")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Team Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>name</b> </td>
                <td>{!!$team->name!!}</td>
            </tr>
            <tr>
                <td> <b>description</b> </td>
                <td>{!!$team->description!!}</td>
            </tr>
            <tr>
                <td> <b>slug</b> </td>
                <td>{!!$team->slug!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>name : </i></b>
                </td>
                <td>{!!$team->user->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>email : </i></b>
                </td>
                <td>{!!$team->user->email!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>password : </i></b>
                </td>
                <td>{!!$team->user->password!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>remember_token : </i></b>
                </td>
                <td>{!!$team->user->remember_token!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$team->user->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$team->user->updated_at!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection