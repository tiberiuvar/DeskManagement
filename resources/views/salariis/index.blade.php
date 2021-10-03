@extends('layouts.main')


@section('content')

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Salarii Angajati</h1>
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
          <a href={{ route('salariis.create')}} class="float-right">Adauga Salariu</a>
      </div>
      <div class="card-body"> 
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Salariat</th>
      <th scope="col">Salariul brut</th>
      <th scope="col">Salariul net</th>
      <th scope="col">Luna</th>
      <th scope="col">An</th>
      <th scope="col">Gestioneaza</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($salariis as $salarii)
    <tr>
      <th scope="row">{{ $salarii->id }}</th>
      <td>{{ $salarii->Salariati_id}}</td>
      <td>{{ $salarii->Salariu_brut}}</td>
      <td>{{ $salarii->Salariu_net}}</td>
      <td>{{ $salarii->Luna}}</td>
      <td>{{ $salarii->An}}</td>
      <td>
      <a href="{{ route('salariis.edit', $salarii->id) }}" class="btn btn-success">Editeaza</a>
      </td>
    </tr>
     @endforeach
  </tbody>
</table>
      </div>
          
</div>
  </div>

 @endsection 