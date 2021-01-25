@extends('admin/master')
@section('title',"Quản Lí Chi Tiết Đơn Hàng")

@section('main')

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading"><h3>Quản Lí Chi Tiết Đơn Hàng</h3></div>
    <br>
    <div class="panel-body">



    </div>

    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Order_id</th>
                <th>Product_id</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Created_at</th>
                <th>Update_at</th>
            </tr>

        </thead>
        <tbody>
            @foreach($order_detail as $or_dt)
            <tr>
                <td>{{ inc_number($i) }}</td>
                <td>{{ $or_dt->order_id}}</td>
                <td>{{ $or_dt->product_id}}</td>
                <td>{{ $or_dt->quantity}}</td>
                <td>{{ $or_dt->price}} $</td>
                <td>{{ $or_dt->created_at}}</td>
                <td>{{ $or_dt->updated_at}}</td>

            </tr>
            @endforeach
        </tbody>

    </table>
    <div class="clear">
    </div>
    {{ $order_detail -> links() }}
</div>

@stop
