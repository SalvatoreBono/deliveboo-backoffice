@extends('layouts.app')
@section('title', 'Projects')
@section('content')
    <div class="container py-5">
        <h1 class="text-center fw-bold text-uppercase pb-3">I tuoi piatti</h1>
        <div class="row row-cols-4 g-3">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card d-flex flex-column justify-content-between h-100">
                        <div>
                            <img src="{{ asset('storage/' . $product->img) }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body h-100">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $product->price }} $</p>
                            <p class="card-text">{{ $product->visible ? "visible" : "not visible" }}</p>
                        </div>
                        <div class="d-flex justify-content-between card-body">
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary">Update</a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
