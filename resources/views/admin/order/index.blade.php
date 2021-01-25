@extends('admin/master')
@section('title',"Quản Lí Đơn Hàng")

@section('main')

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading"><h3>Quản Lí Đơn Hàng</h3></div>
    <br>
    <div class="panel-body">



    </div>

    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <td>STT</td>
                <th>ID</th>
                <th>Email</th>
                <th>Customer ID</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Status</th>
                <th>Created_at</th>
                <th>Update_at</th>
            </tr>

        </thead>
        <tbody>
            @foreach($order as $or)
            <tr>
                <td>{{ inc_number($i) }}</td>
                <td>{{ $or->id }}</td>
                <td>{{ $or->email }}</td>
                <td>{{ $or->customer_id }}</td>
                <td>{{ $or->phone }}</td>
                <td>{{ $or->address }}</td>
                <td>
                    <span class="text-ellipsis">
                        @if($or->status == 0)
                        <a href="{{ url('/active/'.$or->id) }}"><button class="btn btn-success">V</button></a>
                        @else
                        <a href="{{ url('/unactive/'.$or->id) }}"><button class="btn btn-danger">X</button></a>
                        @endif
                    </span>
                </td>

                <td>{{ $or->created_at}}</td>
                <td>{{ $or->updated_at}}</td>

            </tr>
            @endforeach
        </tbody>

    </table>
    <div class="clear">
    </div>
    {{ $order -> links() }}
</div>

@stop
