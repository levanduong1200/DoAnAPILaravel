@extends('admin/master')
@section('title',"Chỉnh Sửa Danh Mục")
@section('main')
<form action="{{ route('category.update',['id'=>$model->id]) }}" method="POST" role="form">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <!-- bao mat form -->
    <legend>Form Edit</legend>

    <div class="form-group">
        <label for="">Category name</label>
        <input type="text" class="form-control" name="name" id=""
        placeholder="Input name" value="{{$model->name}}">
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
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@stop
