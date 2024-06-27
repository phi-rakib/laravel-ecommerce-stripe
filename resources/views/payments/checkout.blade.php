@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
    <div class="container">
        <h1>Checkout</h1>

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
                @foreach ($cart as $id => $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['price'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>{{ $item['price'] * $item['quantity'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <form action="{{ route('payments.createCheckoutSession') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Pay with Stripe</button>
        </form>
    </div>
@endsection