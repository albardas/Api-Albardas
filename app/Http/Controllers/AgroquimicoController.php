<?php

namespace App\Http\Controllers;

use App\Agroquimico;
use App\Http\Resources\Agroquimico\AgroquimicoCollection;
use App\Http\Resources\Agroquimico\AgroquimicoResource;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class AgroquimicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quimicos = Agroquimico::all();

        return response()->json($quimicos);
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
    public function store(Request $request)
    {
        $quimico = new Agroquimico();

        $quimico->fill($request->all());
        $quimico->save();
        return response([
            'data' => new AgroquimicoResource($quimico)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agroquimico  $agroquimico
     * @return \Illuminate\Http\Response
     */
    public function show(Agroquimico $agroquimico)
    {
        // return $agroquimico;
        return new AgroquimicoResource($agroquimico);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agroquimico  $agroquimico
     * @return \Illuminate\Http\Response
     */
    public function edit(Agroquimico $agroquimico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agroquimico  $agroquimico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agroquimico $agroquimico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agroquimico  $agroquimico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agroquimico $agroquimico)
    {
        //
    }
}
