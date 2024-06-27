@extends('layouts.app')

@section('title', 'Carts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-4">
                <div class="float-left">
                    <h1>Cart</h1>
                </div>
                <div class="float-right">
                    <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($carts as $id => $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['price'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>{{ $item['price'] * $item['quantity'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('payments.checkout') }}" class="btn btn-primary">Checkout</a>
    </div>
@endsection