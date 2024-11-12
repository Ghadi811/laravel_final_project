@extends('layouts.appuserui')

@section('content')
<section class="h-100 h-custom" style="background-color: #f9f9f9;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-10 col-xl-8">
        <div class="card border-0 shadow-sm rounded" style="border-color: #f37a27;">
          <div class="card-body p-5">
            <!-- Product Image and Name -->
            <div class="text-center mb-4">
              <img src="{{ $prod->image }}" class="img-fluid rounded mb-3" style="max-width: 300px; height: auto;" alt="{{ $prod->name }}">
              <h2 class="fw-bold" style="color: #f37a27;">{{ $prod->name }}</h2>
            </div>

            <!-- Product Description and Price -->
            <div class="mb-4">
              <p class="lead text-muted">{{ $prod->Description }}</p>
              <p class="fw-bold fs-4" style="color: #333;"> <span style="color: {{ $prod->color }};">{{ $prod->color }}</span></p>
              <p class="fw-bold fs-4" style="color: #f37a27;">Price: {{ $prod->price }} SAR</p>
            </div>

            <!-- Add to Cart and Continue Shopping Buttons -->
            <div class="d-flex justify-content-around mt-4">
              <a href="{{ route('add_to_cart', ['productId' => $prod->id]) }}" class="btn btn-primary px-4 py-2" style="background-color: #f37a27; border: none;">
                Add to Cart
              </a>
              <a href="{{ route('landing') }}" class="btn btn-outline-secondary px-4 py-2">
                Continue Shopping
              </a>
            </div>

            <!-- Customer Support Section -->
            <p class="mt-5 text-center">Need help? <a href="#!" style="color: #f37a27;">Contact us</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
