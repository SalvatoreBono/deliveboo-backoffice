@extends('layouts.app')
@section('title', 'Projects')
@section('content')
    <div class="container">
        @foreach ($products as $product)
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/' . $product->img) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary">Update</a>
                        <form action="{{ route("admin.products.destroy", $product->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
