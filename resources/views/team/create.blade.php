@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create team
    </h1>
    <a href="{!!url('team')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Team Index</a>
    <br>
    <form method = 'POST' action = '{!!url("team")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="slug">slug</label>
            <input id="slug" name = "slug" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>users Select</label>
            <select name = 'user_id' class = 'form-control'>
                @foreach($users as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection