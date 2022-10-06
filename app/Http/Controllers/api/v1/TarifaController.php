<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Tarifa;
use Illuminate\Http\Request;
use App\Http\Requests\api\v1\TarifaStoreRequest;
use App\Http\Requests\api\v1\TarifaUpdateRequest;
use App\Http\Resources\api\v1\TarifaCollection;

class TarifaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarifas = Tarifa::orderBy('tipo', 'asc')->get();
 
        //return response()->json(['data' => $tarifas], 200);

        return (new TarifaCollection($tarifas))
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TarifaStoreRequest $request)
    {
        $tarifa = Tarifa::create($request->all());
 
        return response()->json(['data' => $tarifa], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarifa  $tarifa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarifa $tarifa)
    {
        return response()->json(['data' => $tarifa], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarifa  $tarifa
     * @return \Illuminate\Http\Response
     */
    public function update(TarifaUpdateRequest $request, Tarifa $tarifa)
    {
        $tarifa->update($request->all());
 
        return response()->json(['data' => $tarifa], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarifa  $tarifa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarifa $tarifa)
    {
        $tarifa->delete();

        return response(null, 204);
    }
}
