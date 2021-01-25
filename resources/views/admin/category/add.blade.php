@extends('admin/master')
@section('title',"Thêm Danh Mục")


@section('main')



<form action="{{ route('category.store') }}" method="POST" role="form">
    @csrf
    <!-- bao mat form -->
    <legend>Form title</legend>

    <div class="form-group">
        <label for="">Category name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Input name">
        @if($errors->has('name'))
            {{ $errors->first('name') }}
        @endif
    </div>

    <div class="form-group">
        <label for="">Slug</label>
        <input type="text" class="form-control" name="slug" id="slug" placeholder="Input name">
        @if($errors->has('slug'))
            {{ $errors->first('slug') }}
        @endif
    </div>

    <div class="form-group">
        <label for="">Status</label>

        <div class="radio">
            <label>
                <input type="radio" name="status" id="" value="0" >
                Un publish
            </label>
            <label>
                <input type="radio" name="status" id="" value="1" checked="checked" >
                Publish
            </label>
        </div>

    </div>


    <button type="submit" class="btn btn-primary">Add</button>
</form>


@stop



@section('js')
<script src="{{ url('admin/js/slug.js') }}"></script>
@stop()
