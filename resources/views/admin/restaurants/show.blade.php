@extends('layouts.app')
@section('title', 'Show')
@section('content')
    <div class="container py-5">
        <h1 class="text-center fw-bold text-uppercase pb-5">Il tuo ristorante</h1>
        <div class="d-flex justify-content-center">
            <div class="card mb-3" style="max-width: 800px;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src=" {{ asset('storage/' . $restaurant->img) }} " class="card-img-top" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">{{ $restaurant->activity_name }}</h5>
                            <span class="fw-bold">Indirizzo:</span>
                            <div class="card-text">{{ $restaurant->address }}</div>
                            <span class="fw-bold">Email:</span>
                            <div class="card-text">{{ $restaurant->email }}</div>
                            <span class="fw-bold">Phone:</span>
                            <div class="card-text">{{ $restaurant->phone }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
