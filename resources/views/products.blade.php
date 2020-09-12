@extends('layouts.app')


@section('content')
    <div class="container">
        <h1 class="text-center">Product Page</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <div class="row">
            <div class="card-deck">
                @if(count($products) > 0)
                    @foreach($products as $product)
                        <div class="card">
                            <img
                                src="{{$product->image}}"
                                alt="{{$product->name}}"
                                class="card-img-top"
                                height="400"
                            >
                            <div class="card-header">
                                {{$product->name}}
                                <span class="float-right">{{$product->amount_with_currency}}</span>
                            </div>
                            <div class="card-body">
                                <p>{!! $product->description !!}</p>
                            </div>
                            <div class="card-footer">
                                <a
                                    href="{{route('add-cart', [$product->id])}}"
                                    class="btn btn-success btn-block"
                                >Add To Cart</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
