@extends('layouts.main')


@section('content')

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Birouri</h1>
 </div>
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editeaza Departament') }}
                <a href="{{ route('departamentes.index') }}" class="float-right">Inapoi</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('departamentes.update', $departamente->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="Nume_departamente" class="col-md-4 col-form-label text-md-right">{{ __('Denumire Departament') }}</label>

                            <div class="col-md-6">
                                <input id="Nume_departamente" type="text" class="form-control @error('name') is-invalid @enderror" name="Nume_departamente" value="{{ old('Nume_departamente', $departamente->Nume_departamente) }}" required>

                                @error('Nume_departamente')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birouri_id" class="col-md-4 col-form-label text-md-right">{{ __('Birou') }}</label>

                            <div class="col-md-6">
                                <input id="birouri_id" type="birouri_id" class="form-control @error('birouri_id') is-invalid @enderror" name="birouri_id" value="{{ old('birouri_id', $departamente->birouri_id) }}" required autocomplete="birouri_id">

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
                                    {{ __('Salveaza') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="m-2 p-2">
                    <form method="POST" action="{{ route('departamentes.destroy', $departamente->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Sterge Departament</button>
                    </form>
                </div>
        </div>
    </div>
</div>

 @endsection 