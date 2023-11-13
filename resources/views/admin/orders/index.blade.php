@extends('layouts.app')
@section('title', 'Orders')
@section('content')


<h1>THIS IS THE ORDER PAGE</h1>

    <div class="container py-5">
        <h1 class="text-center fw-bold text-uppercase pb-3">I tuoi ordini</h1>
        <div class="row row-cols-4 g-3">
            @foreach ($orders as $order)
                <div class="col">
                    <div class="card d-flex flex-column justify-content-between h-100">
                        <div class="card-body h-100">
                            <h5 class="card-title">{{ $order['customer_name'] }}</h5>
                            <p class="card-text">{{ $order['customer_surname'] }}</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $order['customer_address'] }}</p>
                            @foreach ($order['products'] as $product)
                                <p class="card-text">{{ $product['name'] }}</p>
                                <p class="card-text">{{ $product['pivot']['quantity'] }}</p>
                            @endforeach
                        </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
