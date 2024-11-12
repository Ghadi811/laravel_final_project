@extends('layouts.appuserui')

@section('content')

<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-8">
            @foreach($product as $item)
                <div class="card mb-4 shadow-sm">
                    <div class="row g-0">
                        <!-- Image Section -->
                        <div class="col-md-4 d-flex align-items-center justify-content-center p-3">
                            <img src="{{$item->image}}" class="img-fluid rounded" alt="Product Image" style="max-width: 100%; height: auto;">
                        </div>

                        <!-- Details Section -->
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="card-title alert alert-success text-center">{{$item->name}}</h2>
                                <p class="card-text text-muted">Color: <span class="text-body">{{$item->color}}</span></p>
                                <p class="card-text text-muted">Price: <strong class="text-body">{{$item->price}} SAR</strong></p>

                                <!-- Button Section -->
                                <div class="d-flex justify-content-center mt-4">
                                    <a href="{{ route('proddet', ['id' => $item->id]) }}" class="btn btn-outline-primary w-75">تفاصيل</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
