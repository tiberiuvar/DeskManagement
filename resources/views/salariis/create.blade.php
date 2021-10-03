@extends('layouts.main')


@section('content')

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Salarii Angajati</h1>
 </div>
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Adauga Salariu') }}
                <a href="{{ route('salariis.index') }}" class="float-right">Inapoi</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('salariis.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="Salariati_id" class="col-md-4 col-form-label text-md-right">{{ __('Salariat #id') }}</label>

                            <div class="col-md-6">
                                <input id="Salariati_id" type="text" class="form-control @error('Salariati_id') is-invalid @enderror" name="Salariati_id"
                                 value="{{ old('Salariati_id') }}" required autocomplete="Salariati_id" autofocus>

                                @error('Salariati_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Salariu_brut" class="col-md-4 col-form-label text-md-right">{{ __('Salariu brut') }}</label>

                            <div class="col-md-6">
                                <input id="Salariu_brut" type="text" class="form-control @error('Salariu_brut') is-invalid @enderror" name="Salariu_brut"
                                 value="{{ old('Salariu_brut') }}" required autocomplete="Salariu_brut" autofocus>

                                @error('Salariu_brut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
            
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Luna" class="col-md-4 col-form-label text-md-right">{{ __('Luna') }}</label>

                            <div class="col-md-6">
                                <input id="Luna" type="text" class="form-control @error('Luna') is-invalid @enderror" name="Luna"
                                 value="{{ old('Luna') }}" required autocomplete="Luna" autofocus>

                                @error('Luna')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
            
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="An" class="col-md-4 col-form-label text-md-right">{{ __('An') }}</label>

                            <div class="col-md-6">
                                <input id="An" type="text" class="form-control @error('An') is-invalid @enderror" name="An"
                                 value="{{ old('An') }}" required autocomplete="An" autofocus>

                                @error('An')
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