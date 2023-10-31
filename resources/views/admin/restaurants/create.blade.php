@extends('layouts.app')
@section('title', 'Create')
@section('content')
    <div class="container pt-3">
        {{-- action="{{ $action }}"= è un segnaposto  --}}
        <form action="{{ route('admin.restaurants.store') }}" class="row g-3" method="POST" enctype="multipart/form-data">
            @csrf()
            {{-- @method($method) = è un segnaposto --}}
            @method('POST')

            <div class="col-12">
                <label for="inputTitle" class="form-label">Email</label>
                {{-- value="{{ old('email'= ottenere il valore precedentemente inviato --}}
                {{-- , $name?->email) }} = stampare il valore di email --}}
                {{-- , $name?->email) }} = "?" se la variabile $name non è definito assegna "null"  --}}
                <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                    id="inputemail" name="email">
                @error('email')
                    <div class="invalid_feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <label for="inputTitle" class="form-label">Phone</label>
                {{-- value="{{ old('email'= ottenere il valore precedentemente inviato --}}
                {{-- , $name?->email) }} = stampare il valore di email --}}
                {{-- , $name?->email) }} = "?" se la variabile $name non è definito assegna "null"  --}}
                <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"
                    id="inputphone" name="phone">
                @error('phone')
                    <div class="invalid_feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <label for="inputTitle" class="form-label">Activity Name</label>
                {{-- value="{{ old('email'= ottenere il valore precedentemente inviato --}}
                {{-- , $name?->email) }} = stampare il valore di email --}}
                {{-- , $name?->email) }} = "?" se la variabile $name non è definito assegna "null"  --}}
                <input type="text" class="form-control @error('activity_name') is-invalid @enderror"
                    value="{{ old('activity_name') }}" id="inputactivity_name" name="activity_name">
                @error('activity_name')
                    <div class="invalid_feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <label for="inputTitle" class="form-label">Image Restaurant</label>
                {{-- value="{{ old('email'= ottenere il valore precedentemente inviato --}}
                {{-- , $name?->email) }} = stampare il valore di email --}}
                {{-- , $name?->email) }} = "?" se la variabile $name non è definito assegna "null"  --}}
                <input type="file" class="form-control @error('img') is-invalid @enderror" value="{{ old('img') }}"
                    id="inputimg" name="img">
                @error('img')
                    <div class="invalid_feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <label for="inputTitle" class="form-label">Address</label>
                {{-- value="{{ old('email'= ottenere il valore precedentemente inviato --}}
                {{-- , $name?->email) }} = stampare il valore di email --}}
                {{-- , $name?->email) }} = "?" se la variabile $name non è definito assegna "null"  --}}
                <input type="text" class="form-control @error('address') is-invalid @enderror"
                    value="{{ old('address') }}" id="inputaddress" name="address">
                @error('address')
                    <div class="invalid_feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-flex gap-3">
                @foreach ($types as $type)
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="type[]" role="switch"
                            id="{{ $type->id }}" value="{{ $type->id }}">
                        <label class="form-check-label" for="{{ $type->id }}">{{ $type->name }}</label>
                    </div>
                @endforeach

            </div>
            <button class="btn btn-primary">Create Restaurant</button>
        </form>
    </div>
@endsection
