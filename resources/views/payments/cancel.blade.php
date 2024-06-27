@extends('layouts.app')

@section('title', 'Payment Cancel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-4">
                <h2>Payment Cancelled</h2>
                <p>You payment was cancelled</p>
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Products</a>
            </div>
        </div>
    </div>
@endsection