@extends('master')

@section('main')
<div class="small-container">
    <div class="row">
        <div class="col-2">
            <img src="{{ url('uploads') }}/{{ $model->image }}" width="70%" id="productImg">
        </div>
        <div class="col-2">
            {{-- @foreach($category as $cat)

                <a>{{ $cat->name }}</a>

            @endforeach --}}
            <h1>{{ $model->name }}</h1>
            <h4>Price: {{ $model->sale_price }}$</h4>
            {{-- <input type="number" value="1"> --}}
            <a href="{{ route('cart.add',['id'=>$model->id]) }}" class="btn">Add to cart</a>
            <h3>Product Details</h3>
            <p>{{ $model->content }}</p>
        </div>
    </div>
</div>
@stop
