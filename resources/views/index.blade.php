@extends('master')
@section('main')

            <div class="small-container">
                <div class="row">
                    @foreach ($top_product as $tp)
                    <div class="col-4">
                        <img src="{{ url('uploads')}}/{{$tp->image }}">
                            <h4>{{ $tp->name }}</h4>
                            <p>
                                @if($tp -> sale_price > 0)
                                <s>Old Price: {{ number_format($tp->price) }}$</s> <br>
                                <b>New Price: {{ number_format($tp->sale_price) }}$</b>
                                @else
                                <b>Price:{{ number_format($tp->price) }}$</b>
                                @endif
                            </p>
                            <p>
                                <a href="{{ route('view',['slug'=>$tp->slug]) }}" class="btn" >Detail</a>
                                <a href="{{ route('cart.add',['id'=>$tp->id]) }}" class="btn">Add to cart</a>
                            </p>
                    </div>
                @endforeach
                </div>
            </div>
                {{ $top_product -> links() }}


@stop
