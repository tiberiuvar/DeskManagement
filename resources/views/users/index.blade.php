@extends('layouts.main')


@section('content')

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Users</h1>
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
          <a href={{ route('users.create')}} class="float-right" >Adauga User</a>
      </div>
      <div class="card-body"> 
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Nume</th>
      <th scope="col">Email</th>
      <th scope="col">Gestioneaza</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{ $user->id}}</th>
      <td>{{ $user->name}}</td>
      <td>{{ $user->email}}</td>
      <td>
      <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success">Editeaza</a>
      </td>
    </tr>
     @endforeach
  </tbody>
</table>
      </div>
          
</div>
  </div>

 @endsection 