<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SalariiStoreRequest;
use App\Http\Requests\SalariiUpdateRequest;
use App\Models\Salarii;


class SalariiController extends Controller
{
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salariis = Salarii::all();
        return view('salariis.index', compact('salariis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salariis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalariiStoreRequest $request)
    {
        Salarii::create([

            'Salariati_id' => $request->Salariati_id,
            'Salariu_brut' => $request->Salariu_brut,
            'Salariu_net' => 0.6 * $request->Salariu_brut, 
            'Luna' =>  $request->Luna,
            'An' =>  $request->An, 

    ]);
        
        return redirect()->route('salariis.index')->with ('message', 'Salariu adaugat cu succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Salarii $salarii)
    {
        return view('salariis.edit', compact('salarii'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalariiUpdateRequest $request, Salarii $salarii)
    {
        $salarii->update([

            'Salariati_id' => $request->Salariati_id,
            'Salariu_brut' => $request->Salariu_brut,
            'Salariu_net' =>  $request->Salariu_net,
            'Luna' =>  $request->Luna,
            'An' =>  $request->An,

        ]);

        return redirect()->route('salariis.index')->with('message', 'Salariu modificat cu succes ');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salarii $salarii)
    {
        $salarii->delete();

        return redirect()->route('salariis.index')->with('message', 'Salariu sters cu succes');
    }

}

