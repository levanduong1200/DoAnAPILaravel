@extends('admin/master')
@section('title',"Thêm User")


@section('main')



<form action="{{ route('user.store') }}" method="POST" role="form">
    @csrf
    <!-- bao mat form -->
    <legend>Thêm user</legend>

    <div class="form-group">
        <label for="">Username</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Input name">
        @if($errors->has('name'))
            {{ $errors->first('name') }}
        @endif
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="Input name">
        @if($errors->has('email'))
            {{ $errors->first('email') }}
        @endif
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Input password">
        @if($errors->has('password'))
            {{ $errors->first('password') }}
        @endif
    </div>

    <div class="form-group">
        <label for="">Confirm Password</label>
        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Input confirm_password">
        @if($errors->has('confirm_password'))
            {{ $errors->first('confirm_password') }}
        @endif
    </div>


    <button type="submit" class="btn btn-primary">Add</button>
</form>


@stop

