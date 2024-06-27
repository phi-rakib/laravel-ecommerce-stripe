@extends('layouts.app')

@section('title', 'Products')

@section('content')

<div class="container">
    <h1>Products</h1>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ Str::substr($product->description, 0, 30) . '...' }}</p>
                        <p>$ {{ $product->price }}</p>
                        <form action="{{ route('carts.add') }}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
