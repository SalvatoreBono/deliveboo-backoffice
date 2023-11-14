@extends('layouts.app')
@section('title', 'Create')
@section('content')
    <div class="container pt-3">
        {{-- action="{{ $action }}"= è un segnaposto  --}}
        <form action="{{ route('admin.products.store') }}" class="row g-3" method="POST" enctype="multipart/form-data"
            onsubmit="return(validate())">
            @csrf()
            {{-- @method($method) = è un segnaposto --}}
            @method('POST')

            <div class="col-12">
                <label for="inputTitle" class="form-label">Nome piatto <span class="text-danger">*</span></label>
                {{-- value="{{ old('email'= ottenere il valore precedentemente inviato --}}
                {{-- , $name?->email) }} = stampare il valore di email --}}
                {{-- , $name?->email) }} = "?" se la variabile $name non è definito assegna "null"  --}}
                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                    id="inputname" name="name">
                <div id="error-name" class="invalid_feedback"></div>
                @error('name')
                    <div class="invalid_feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <label for="inputTitle" class="form-label">Immagine piatto <span class="text-danger">*</span> </label>
                {{-- value="{{ old('email'= ottenere il valore precedentemente inviato --}}
                {{-- , $name?->email) }} = stampare il valore di email --}}
                {{-- , $name?->email) }} = "?" se la variabile $name non è definito assegna "null"  --}}
                <input type="file" class="form-control @error('img') is-invalid @enderror" value="{{ old('img') }}"
                    id="inputimg" name="img" accept="image/*">
                <div id="error-img" class="invalid_feedback"></div>
                @error('img')
                    <div class="invalid_feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <label for="inputTitle" class="form-label">Descrizione <span class="text-danger">*</span></label>
                {{-- value="{{ old('email'= ottenere il valore precedentemente inviato --}}
                {{-- , $name?->email) }} = stampare il valore di email --}}
                {{-- , $name?->email) }} = "?" se la variabile $name non è definito assegna "null"  --}}
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="inputdescription">{{ old('description') }}</textarea>
                <div id="error-description" class="invalid_feedback"></div>
                @error('description')
                    <div class="invalid_feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <label for="inputTitle" class="form-label">Prezzo <span class="text-danger">*</span></label>
                {{-- value="{{ old('email'= ottenere il valore precedentemente inviato --}}
                {{-- , $name?->email) }} = stampare il valore di email --}}
                {{-- , $name?->email) }} = "?" se la variabile $name non è definito assegna "null"  --}}
                <input step="0.01" type="number" class="form-control @error('price') is-invalid @enderror"
                    value="{{ old('price') }}" id="inputprice" name="price">
                <div id="error-price" class="invalid_feedback"></div>
                @error('price')
                    <div class="invalid_feedback">{{ $message }}</div>
                @enderror
            </div>
            <label class="form-check-label" for="flexRadioDefault2">
                Visibile <span class="text-danger">*</span>
            </label>
            <div class="form-check @error('visible') is-invalid @enderror">
                <input class="form-check-input type-radios" type="radio" name="visible" id="flexRadioDefault1"
                    value="1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Si
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input type-radios" type="radio" name="visible" id="flexRadioDefault2"
                    value="0">
                <label class="form-check-label" for="flexRadioDefault1">
                    No
                </label>
            </div>
            <div id="error-visible" class="invalid_feedback"></div>
            @error('visible')
                <div class="invalid_feedback">{{ $message }}</div>
            @enderror
            <button class="btn btn-primary" type="submit">Crea il tuo piatto</button>
        </form>
    </div>
    <script src="{{ asset('js/products/products_validation.js') }}"></script>
@endsection
