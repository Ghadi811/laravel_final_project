@extends('layouts.appuserui')

@section('content')

<div class="container py-5">
    <h2 class="text-center mb-4">Your Cart</h2>
    @if($cartItems->isEmpty())
        <div class="alert alert-info text-center">Your cart is empty.</div>
    @else
        <div class="row">
            @foreach($cartItems as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ $item->image }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <p class="text-muted"> {{ $item->color }}</p>
                            <p class="fw-bold">Price: ${{ $item->price }}</p>
                            <p>Quantity: {{ $item->qty }}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-danger">Remove</a>
                            <a href="#" class="btn btn-primary">Update Quantity</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@endsection
