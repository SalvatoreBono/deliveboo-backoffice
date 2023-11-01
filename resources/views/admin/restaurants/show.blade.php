@extends('layouts.app')
@section('title', 'Show')
@section('content')
    <div class="card" style="width: 18rem;">
        <img src=" {{ asset('storage/' . $restaurant->img) }} " class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $restaurant->activity_name }}</h5>
            <div class="card-text">{{ $restaurant->address }}</div>
            <div class="card-text">{{ $restaurant->email }}</div>
            <div class="card-text">{{ $restaurant->phone }}</div>
        </div>
    </div>
@endsection
