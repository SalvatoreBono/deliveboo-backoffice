@extends('layouts.app')
@section('title', 'Show')
@section('content')
    <div class="container py-5">
        <h1 class="text-center fw-bold text-uppercase pb-5">Il tuo ristorante</h1>
        <div class="d-flex justify-content-center">
            <div class="my-card card mb-3" style="max-width: 800px;">
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
                            <span class="fw-bold">Numero di telefono:</span>
                            <div class="card-text">{{ $restaurant->phone }}</div>
                            <span class="fw-bold">Tipologia del ristorante:</span>
                            <ul class="p-0 d-flex justify-content-start">
                                @foreach ($restaurant->types as $type)
                                    <li class="p-2">{{ $type->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
