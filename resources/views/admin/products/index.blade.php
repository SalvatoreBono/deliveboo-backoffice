@extends('layouts.app')
@section('title', 'Projects')
@section('content')
    <div class="container pb-5">
        <h1 class="text-center fw-bold text-uppercase pb-3">I tuoi piatti</h1>
        <div class="row row-cols-4 g-3">
            @foreach ($products as $product)
                <div class="col-12 col-md-4 ">
                    <div class="my-card card d-flex flex-column justify-content-between h-100">
                        <div>
                            <img src="{{ asset('storage/' . $product->img) }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body h-100">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $product->price }} €</p>
                            <p class="card-text">{{ $product->visible ? 'Visibile' : 'Non visibile' }}</p>
                        </div>
                        <div class="d-flex justify-content-between card-body">
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-success ">Aggiorna</a>

                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                Elimina
                            </button>

                            <div class="modal fade text-black" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Elimina piatto</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body  ">
                                            Sei sicuro di voler eliminare il piatto?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success  "
                                                data-bs-dismiss="modal">Chiudi</button>
                                            <form action="{{ route('admin.products.destroy', $product->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Conferma</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
