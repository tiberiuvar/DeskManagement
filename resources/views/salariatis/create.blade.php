@extends('layouts.main')


@section('content')

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Salariati</h1>
 </div>
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Adauga Salariat') }}
                <a href="{{ route('salariatis.index') }}" class="float-right">Inapoi</a>
                </div>
                  
                <div class="card-body">
                    <form method="POST" action="{{ route('salariatis.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="Nume" class="col-md-4 col-form-label text-md-right">{{ __('Nume') }}</label>

                            <div class="col-md-6">
                                <input id="Nume" type="text" class="form-control @error('Nume') is-invalid @enderror" name="Nume" value="{{ old('Nume') }}" required autocomplete="Nume" autofocus>

                                @error('Nume')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Prenume" class="col-md-4 col-form-label text-md-right">{{ __('Prenume') }}</label>

                            <div class="col-md-6">
                                <input id="Prenume" type="Prenume" class="form-control @error('Prenume') is-invalid @enderror" name="Prenume" value="{{ old('Prenume') }}" required autocomplete="Prenume">

                                @error('Prenume')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                        <div class="col-md-6">
                                <input id="Email" type="Email" class="form-control @error('Email') is-invalid @enderror" name="Email" value="{{ old('Email') }}" required autocomplete="Email">

                                @error('Email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Data_de_nastere" class="col-md-4 col-form-label text-md-right">{{ __('Data de nastere') }}</label>

                            <div class="col-md-6">
                                <input id="Data_de_nastere" type="Data_de_nastere" class="form-control @error('Data_de_nastere') is-invalid @enderror" name="Data_de_nastere" required autocomplete="Data_de_nastere">

                                @error('Data_de_nastere')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="departamentes_id" class="col-md-4 col-form-label text-md-right">{{ __('Departament') }}</label>

                            <div class="col-md-6">
                                <input id="departamentes_id" type="departamentes_id" class="form-control @error('departamentes_id') is-invalid @enderror" name="departamentes_id" required autocomplete="departamentes_id">

                                @error('departamentes_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birouris_id" class="col-md-4 col-form-label text-md-right">{{ __('Birou') }}</label>

                            <div class="col-md-6">
                                <input id="birouris_id" type="birouris_id" class="form-control @error('birouris_id') is-invalid @enderror" name="birouris_id" required autocomplete="birouris_id">

                               @error('birouris_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Functia_ocupata" class="col-md-4 col-form-label text-md-right">{{ __('Functie') }}</label>

                            <div class="col-md-6">
                                <input id="Functia_ocupata" type="Functia_ocupata" class="form-control @error('Functia_ocupata') is-invalid @enderror" name="Functia_ocupata" required autocomplete="Functia_ocupata">

                                @error('Functia_ocupata')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Adauga') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection 