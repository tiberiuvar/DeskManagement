<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartamenteStoreRequest;
use App\Http\Resources\DepartamenteResource;
use App\Http\Resources\DepartamenteSingleResource;
use Illuminate\Http\Request;
use App\Models\Birouri;
use App\Models\Departamente;

class DepartamenteController extends Controller
{

    public function index(Request $request)
    {
        $departamentes = Departamente::all();

        return DepartamenteResource::collection($departamentes);
        
    }

    public function store(DepartamenteStoreRequest $request)
    {
        $departamente = Departamente::create($request->validated());

        return response()->json($departamente); 

    }

    public function show(Departamente $departamente)
    {
        return new DepartamenteSingleResource($departamente);
    }

    public function update(DepartamenteStoreRequest $request, Departamente $departamente)
    {
        $departamente->update($request->validated());
        
    }

    public function destroy(Departamente $departamente)
    {
        try
        {
            $departamente->delete();
        }
        catch(\Illuminate\Database\QueryException $e)
        {
            return response()->json('Departamentul nu poate fi sters (fk constraint)');
        }
       

        return response()->json('Departament Sters Cu Succes');
    }

    public function birouris()
    {
        $birouris = Birouri::all();

        return response()->json($birouris);
    }
}

