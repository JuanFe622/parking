<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use App\Http\Requests\api\v1\VehiculoStoreRequest;
use App\Http\Requests\api\v1\VehiculoUpdateRequest;
use App\Http\Resources\api\v1\VehiculoCollection;
use App\Http\Resources\api\v1\VehiculoResource;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = Vehiculo::orderBy('id', 'asc')->get();
 
        //return response()->json(['data' => $vehiculos], 200);

        return (new VehiculoCollection($vehiculos))
            ->response()
            ->setStatusCode(200);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiculoStoreRequest $request)
    {
        $vehiculo = Vehiculo::create($request->all());
 
        return response()->json(['data' => $vehiculo], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculo $vehiculo)
    {
        return response()->json(['data' => $vehiculo], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(VehiculoUpdateRequest $request, Vehiculo $vehiculo)
    {
        $vehiculo->update($request->all());
 
        return response()->json(['data' => $vehiculo], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();

        return response(null, 204);

    }
}