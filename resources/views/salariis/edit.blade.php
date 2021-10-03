@extends('layouts.main')


@section('content')

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Salarii</h1>
 </div>
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Actualizeaza Salariu') }}
                    <a href="{{ route('salariis.index') }}" class="float-right">Inapoi</a>
                </div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('salariis.update', $salarii->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="Salariati_id" class="col-md-4 col-form-label text-md-right">{{ __('Salariati #Id') }}</label>

                            <div class="col-md-6">
                                <input id="Salariati_id" type="text" class="form-control @error('Salariati_id') is-invalid @enderror" name="Salariati_id" value="{{ old('Salariati_id', $salarii->Salariati_id) }}" required autocomplete="Salariati_id" autofocus>

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
                                <input id="Salariu_brut" type="Salariu_brut" class="form-control @error('Salariu_brut') is-invalid @enderror" name="Salariu_brut" value="{{ old('Salariu_brut', $salarii->Salariu_brut) }}" required autocomplete="Salariu_brut">

                                @error('Salariu_brut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Salariu_net" class="col-md-4 col-form-label text-md-right">{{ __('Salariu net') }}</label>

                        <div class="col-md-6">
                                <input id="Salariu_net" type="Salariu_net" class="form-control @error('Salariu_net') is-invalid @enderror" name="Salariu_net" value="{{ old('Salariu_net', $salarii->Salariu_net) }}" required autocomplete="Salariu_net">

                                @error('Salariu_net')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Luna" class="col-md-4 col-form-label text-md-right">{{ __('Luna') }}</label>

                        <div class="col-md-6">
                                <input id="Luna" type="Luna" class="form-control @error('Luna') is-invalid @enderror" name="Luna" value="{{ old('Luna', $salarii->Luna) }}" required autocomplete="Luna">

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
                                <input id="An" type="An" class="form-control @error('An') is-invalid @enderror" name="An" value="{{ old('An', $salarii->An) }}" required autocomplete="An">

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
                                    {{ __('Salveaza') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="m-2 p-2">
                    <form method="POST" action="{{ route('salariis.destroy', $salarii->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Sterge Salariu</button>
                    </form>
                 </div>
        </div>
    </div>
</div>

 @endsection 