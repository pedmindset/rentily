@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Team Index
    </h1>
    <a href='{!!url("team")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
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
            <th>description</th>
            <th>slug</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>remember_token</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($teams as $team) 
            <tr>
                <td>{!!$team->name!!}</td>
                <td>{!!$team->description!!}</td>
                <td>{!!$team->slug!!}</td>
                <td>{!!$team->user->name!!}</td>
                <td>{!!$team->user->email!!}</td>
                <td>{!!$team->user->password!!}</td>
                <td>{!!$team->user->remember_token!!}</td>
                <td>{!!$team->user->created_at!!}</td>
                <td>{!!$team->user->updated_at!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/team/{!!$team->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/team/{!!$team->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/team/{!!$team->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $teams->render() !!}

</section>
@endsection