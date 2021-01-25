@extends('master')
@section('cartnha')

<div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
            @foreach ($cart->items as  $item)
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="{{ url('uploads') }}/{{ $item['image'] }}">
                        <div>
                            <p>{{ $item['name'] }}</p>
                            <small>{{ $item['price'] }}$</small>
                            <br>
                            <a href="{{ route('cart.remove',['id'=>$item['id']]) }}">Remove</a>
                        </div>
                    </div>
                </td>
                <td>
                    <form action="{{ route('cart.update',['id'=>$item['id']]) }}" method="get">
                        <input type="number"  name="quantity" min="1" max="10"  value="{{ $item['quantity'] }}" >
                        <input type="submit" class="btn  btn-primary" value="Save">
                    </form>
                </td>
                <td>{{ $item['price']*$item['quantity'] }}$</td>
            </tr>
        @endforeach
    </table>
    <div class="total-price">
        <table>
            <tr>
                <td>Total</td>
                <td>{{ number_format($cart->total_price) }}$</td>
            </tr>
        </table>
    </div>
    <h1>Đặt Hàng</h1>
   <div class="container">
    <form action="{{ route('dathang') }}" method="post">
        @csrf
            <label for="myEmail">Họ và Tên</label>
            <input type="text" name="name"  class="form-control" >
            @if($errors->has('name'))
                <div class="alert alert-danger">
                    {{ $errors->first('name') }}
                </div>
            @endif

           <label for="myPassword">Email</label>
           <input type="email" name="email"  class="form-control" >
           @if($errors->has('email'))
                <div class="alert alert-danger">
                    {{ $errors->first('email') }}
                 </div>
             @endif

           <label for="myEmail">Số điện thoại</label>
           <input type="number" name="phone"  class="form-control phone" >
            @if($errors->has('phone'))
                        <div class="alert alert-danger">
                            {{ $errors->first('phone') }}
                        </div>

                         @endif

           <label for="myEmail">Địa chỉ</label>
           <input type="text" name="address"  class="form-control">
           @if($errors->has('address'))
                        <div class="alert alert-danger">
                            {{ $errors->first('address') }}
                        </div>

                         @endif

                <br>
           <button type="submit" class="btn btn-primary">Đặt Hàng</button>
     </form>
   </div>

</div>


@stop

<style>
.phone input{
    width: 100%
}

</style>
