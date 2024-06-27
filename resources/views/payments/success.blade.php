@extends('layouts.app')

@section('title', 'Payment Success')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-4">
                <h2>Payment Successful</h2>
                <p>Thank you for your purchase</p>
                <a href="{{ route('products.index') }}" class="btn btn-primary">Continue Shopping</a>
            </div>
        </div>
    </div>
@endsection