@extends('layouts.app')
@section('title', 'Orders')
@section('content')

    <style>
        @media (max-width: 992px) {
            .title {
                display: none;
            }

            th,
            td {
                display: block;
                width: 100%;
            }

            th {
                text-align: left;
            }

            td:nth-of-type(1):before {
                content: "N° Ordini recenti: ";
                font-weight: bold;
            }

            td:nth-of-type(2):before {
                content: "Data e ora dell'ordine: ";
                font-weight: bold;
            }

            td:nth-of-type(3):before {
                content: "Nome: ";
                font-weight: bold;
            }

            td:nth-of-type(4):before {
                content: "Cognome: ";
                font-weight: bold;
            }

            td:nth-of-type(5):before {
                content: "Indirizzo: ";
                font-weight: bold;
            }

            td:nth-of-type(6):before {
                content: "Email: ";
                font-weight: bold;
            }

            td:nth-of-type(7):before {
                content: "Prodotti: ";
                font-weight: bold;
            }

            td:nth-of-type(8):before {
                content: "Prezzo totale: ";
                font-weight: bold;
            }
        }
    </style>

    <div style="background-color: rgba(0, 0, 0, 0.5)" class="container py-3 card">
        <h1 class="text-center fw-bold text-uppercase pb-3 text-light">I tuoi ordini</h1>
        <table class="table">
            <thead>
                <tr>
                    <th class="title" scope="col">N° Ordini recenti</th>
                    <th class="title" scope="col">Data e ora dell'ordine</th>
                    <th class="title" scope="col">Nome</th>
                    <th class="title" scope="col">Cognome</th>
                    <th class="title" scope="col">Indirizzo</th>
                    <th class="title" scope="col">Email</th>
                    <th class="title" scope="col">Prodotti</th>
                    <th class="title" scope="col">Prezzo totale</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td scope="row">{{ $loop->index + 1 }}</td>
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
                        <td class="d-lg-none" style="height: 50px;"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
