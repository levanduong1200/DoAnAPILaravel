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
            <tr>
                <td>
                    <a href="{{ route('cart.clear') }}" class="btn">Remove All</a>
                </td>
                <td><a href="{{ route('dathang') }}" class="btn">Checkout</a></td>
            </tr>
        </table>
    </div>
</div>
@stop





