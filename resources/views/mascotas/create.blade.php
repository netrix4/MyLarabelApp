@extends('layouts.app')

@section('content')
    <div class="card-element-wrapper">
        <div class="card-element-header">
            <h2>Registrar Mascota</h2>
        </div>

        <div class="card-element-content">
            <form class="option-form" method="POST" action="{{ route('mascotas.store') }}">
                @csrf
                <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autofocus>

                @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="especie" class="col-md-4 col-form-label text-md-right">{{ __('Especie') }}</label>
                <input id="especie" type="text" class="form-control @error('especie') is-invalid @enderror" name="especie" value="{{ old('especie') }}" required>

                @error('especie')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="raza" class="col-md-4 col-form-label text-md-right">{{ __('Raza') }}</label>
                <input id="raza" type="text" class="form-control @error('raza') is-invalid @enderror" name="raza" value="{{ old('raza') }}">

                @error('raza')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="edad" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>
                <input id="edad" type="number" class="form-control @error('edad') is-invalid @enderror" name="edad" value="{{ old('edad') }}">

                @error('edad')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br>
                <button type="submit" class="button-generic">
                    {{ __('Registrar Mascota') }}
                </button>
            </form>
            <form method='GET' action="{{ route('index') }}">
                <button class="button-generic" type="submit">Home</button>
            </form>
            
        </div>
    </div>
@endsection
