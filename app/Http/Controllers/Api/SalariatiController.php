<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SalariatiStoreRequest;
use App\Http\Resources\SalariatiResource;
use App\Http\Resources\SalariatiSingleResource;
use App\Models\Departamente;
use App\Models\Birouri;
use App\Models\Salariati;
use Illuminate\Http\Request;

class SalariatiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $salariatis = Salariati::all();

    
       

        return SalariatiResource::collection($salariatis);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalariatiStoreRequest $request)
    {
    //     Salariati::create([

    //         'Nume' => $request->Nume,
    //         'Prenume' => $request->Prenume,
    //         'Email' => $request->Email,
    //         'Data_de_nastere' => $request->Data_de_nastere,
    //         'departamentes_id' => $request->departamentes_id,
    //         'birouris_id' => $request->birouris_id,
    //         'Manager' => $request->Manager

    // ]);

    // return redirect()->route('SalaritisIndex')->with ('message', 'Salariat adaugat cu succes');

    
    $salariati = Salariati::create($request->validated());

    return response()->json($salariati); 
   
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Salariati $salariati)
    {
        return new SalariatiSingleResource($salariati);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalariatiStoreRequest $request, Salariati $salariati)
    {
        $salariati->update($request->validated());
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salariati $salariati)
    {
        $salariati->delete();

        return response()->json('Salariat Sters Cu Succes');
    }

    public function departamentes()
    {
        $departamentes = Departamente::all();

        return response()->json($departamentes);
    }

    public function birouris()
    {
        $birouris = Birouri::all();

        return response()->json($birouris);
    }
}