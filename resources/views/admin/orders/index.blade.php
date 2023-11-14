@extends('layouts.app')
@section('title', 'Orders')
@section('content')

<div class="container py-5">
    <h1 class="text-center fw-bold text-uppercase pb-3 text-danger">I tuoi ordini</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Latest first</th>
                <th scope="col">Order Date and Time</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Products</th>
                <th scope="col">Total Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>{{ $order['created_at'] }}</td>
                <td>{{ $order['customer_name'] }}</td>
                <td>{{ $order['customer_surname'] }}</td>
                <td>{{ $order['customer_address'] }}</td>
                <td>{{ $order['customer_email'] }}</td>
                <td>
                    @foreach ($order['products'] as $product)
                    <div>
                        <span class="card-text">{{ $product['name'] }}</span>
                        :
                        <span class="card-text">{{ $product['pivot']['quantity'] }}</span>
                    </div>
                    @endforeach
                </td>
                <td>€. {{ $order['total_price'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
