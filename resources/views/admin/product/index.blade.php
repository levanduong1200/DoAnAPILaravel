@extends('admin/master')
@section('title',"Quản Lí Sản Phẩm")

@section('main')

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">{{ trans('product.lb_product_list') }}</div>
    <div class="panel-body">

       <form action="" method="POST" role="form">

           <div class="form-group">

               <input type="text" class="form-control" id="" name="search" placeholder="Input keyword" >
           </div>
           <button type="submit" class="btn btn-primary">
               Tìm kiếm
           </button>
           <a class="btn btn-success" href="{{route('product.create')}}">Thêm</a>
       </form>

    </div>

    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>{{ trans('product.lb_product_name') }}</th>
                <th>{{ trans('product.lb_product_image') }}</th>
                <th>{{ trans('product.lb_product_category') }}</th>
                <th>{{ trans('product.lb_product_status') }}</th>
                <th>{{ trans('product.lb_product_created') }}</th>
                <th></th>
                <th></th>
            </tr>

        </thead>
        <tbody>
            @foreach($products as $pro)
            <tr>
                <td>{{ inc_number($i) }}</td>
                <td>{{ $pro->id }}</td>
                <td>{{ $pro->name }}</td>
                <td> <img src="{{ url('uploads') }}/{{ $pro->image }}" ></td>
                <td>{{ $pro->cat->name }}</td>
                <td>{{ $pro->status }}</td>
                <td>{{ $pro->created_at}}</td>
                <form action="{{ route('product.destroy',['id' =>$pro->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                <td><a href="{{route('product.edit',['id'=>$pro->id])}}" class="btn btn-xs btn-primary">Edit</a></td>
                <td><button class="btn btn-xs btn-danger" onclick="return confirm('OK')">Delete</button></td>
                </form>
            </tr>
            @endforeach
        </tbody>

    </table>
    <div class="clear">
    </div>
    {{ $products -> links() }}
</div>

@stop
