@extends('layouts.main')


@section('content')

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Departamente</h1>
 </div>
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Adauga Departament') }}
                <a href="{{ route('departamentes.index') }}" class="float-right">Inapoi</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('departamentes.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="Nume_departamente" class="col-md-4 col-form-label text-md-right">{{ __('Denumire Departament') }}</label>

                            <div class="col-md-6">
                                <input id="Nume_departamente" type="text" class="form-control @error('Nume_departamente') is-invalid @enderror" name="Nume_departamente"
                                 value="{{ old('Nume_departamente') }}" required autocomplete="Nume_departamente" autofocus>

                                @error('Nume_departamente')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birouri_id" class="col-md-4 col-form-label text-md-right">{{ __('Birouri') }}</label>

                            <div class="col-md-6">
                                <input id="birouri_id" type="text" class="form-control @error('birouri_id') is-invalid @enderror" name="birouri_id"
                                 value="{{ old('birouri_id') }}" required autocomplete="birouri_id" autofocus>

                                @error('birouri_id')
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