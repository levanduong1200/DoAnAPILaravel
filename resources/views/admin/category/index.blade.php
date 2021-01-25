@extends('admin/master')
@section('title',"Quản Lí Danh Mục")

@section('main')

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">{{ trans('category.lb_category_list') }}</div>
    <div class="panel-body">

       <form action="" method="POST" role="form">

           <div class="form-group">

               <input type="text" class="form-control" id="" name="search" placeholder="Input keyword">
           </div>
           <button type="submit" class="btn btn-primary">
               Tìm kiếm
           </button>
           <a class="btn btn-success" href="{{ route('category.create') }}">Thêm</a>
       </form>

    </div>

    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>{{ trans('category.lb_category_name') }}</th>
                <th>{{ trans('category.lb_category_totalproduct') }}</th>
                <th>{{ trans('category.lb_category_status') }}</th>
                <th>{{ trans('category.lb_product_created') }}</th>
                <th></th>
                <th></th>
            </tr>

        </thead>
        <tbody>
            @foreach($cats as $cat)
            <tr>
                <td>{{ inc_number($i) }}</td>
                <td>{{ $cat->id }}</td>
                <td>{{ $cat->name }}</td>
                <td>{{ $cat->products->count() }}</td>
                <td>{{ $cat->status }}</td>
                <td>{{ $cat->created_at }}</td>
                <form action="{{ route('category.destroy',['id' =>$cat->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                <td><a href="{{route('category.edit',['id'=>$cat->id])}}" class="btn btn-xs btn-primary">Edit</a></td>
                <td><button class="btn btn-xs btn-danger" onclick="return confirm('OK')">Delete</button></td>
            </form>
            </tr>
            @endforeach
        </tbody>

    </table>
    <div class="clear">
    </div>
    {{ $cats -> links() }}
</div>

@stop
