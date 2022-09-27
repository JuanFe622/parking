<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Plaza;
use Illuminate\Http\Request;

class PlazaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plaza = Plaza::orderBy('estado', 'asc')->get();
 
        return response()->json(['data' => $plazas], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plaza = Plaza::create($request->all());
 
        return response()->json(['data' => $plaza], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plaza  $plaza
     * @return \Illuminate\Http\Response
     */
    public function show(Plaza $plaza)
    {
        return response()->json(['data' => $plaza], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plaza  $plaza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plaza $plaza)
    {
        $plaza->update($request->all());
 
        return response()->json(['data' => $plaza], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plaza  $plaza
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plaza $plaza)
    {
        $plaza->delete();

        return response(null, 204);
    }
}
