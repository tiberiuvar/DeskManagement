@extends('layouts.main')


@section('content')

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Birouri </h1>
 </div>
  <div class="row">
  <div class="card mx-auto">
    <div>
    @if (session()->has('message'))
       <div class="alert alert-succes">
         {{ session('message')}}
       </div>
     @endif
    </div>    
      <div class="card-header">
          <a href={{ route('birouris.create')}} class="float-right">Adauga Birou</a>
      </div>
      <div class="card-body"> 
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Birou</th>
      <th scope="col">Gestioneaza</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($birouris as $birouri)
    <tr>
      <th scope="row">{{ $birouri->id }}</th>
      <td>{{ $birouri->Denumire_birouri}}</td>
      <td>
      <a href="{{ route('birouris.edit', $birouri->id) }}" class="btn btn-success">Editeaza</a>
      </td>
    </tr>
     @endforeach
  </tbody>
</table>
      </div>
          
</div>
  </div>

 @endsection 