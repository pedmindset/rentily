@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit team
    </h1>
    <a href="{!!url('team')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Team Index</a>
    <br>
    <form method = 'POST' action = '{!! url("team")!!}/{!!$team->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$team->
            name!!}"> 
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control" value="{!!$team->
            description!!}"> 
        </div>
        <div class="form-group">
            <label for="slug">slug</label>
            <input id="slug" name = "slug" type="text" class="form-control" value="{!!$team->
            slug!!}"> 
        </div>
        <div class="form-group">
            <label>users Select</label>
            <select name = 'user_id' class = "form-control">
                @foreach($users as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection