<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BirouriStoreRequest;
use App\Http\Resources\BirouriResource;
use App\Http\Resources\BirouriSingleResource;
use Illuminate\Http\Request;
use App\Models\Birouri;


class BirouriController extends Controller
{

    public function index(Request $request)
    {
        $birouris = Birouri::all();

        return BirouriResource::collection($birouris);
        
    }

    public function store(BirouriStoreRequest $request)
    {
        $birouri = Birouri::create($request->validated());

        return response()->json($birouri); 

    }

    public function show(Birouri $birouri)
    {
        return new BirouriSingleResource($birouri);
    }

    public function update(BirouriStoreRequest $request, Birouri $birouri)
    {
        $birouri->update($request->validated());
        
    }

    public function destroy(Birouri $birouri)
    {
        try
        {
            $birouri->delete();
        }
        catch(\Illuminate\Database\QueryException $e)
        {
            return response()->json('Biroul nu poate fi sters (fk constraint)');
        }
       

        return response()->json('Birou Sters Cu Succes');
    }

   
}