<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\TicketEgreso;
use Illuminate\Http\Request;
use App\Http\Requests\api\v1\TicketEgresoStoreRequest;
use App\Http\Requests\api\v1\TicketEgresoUpdateRequest;

class TicketEgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticketsEgreso = TicketEgreso::orderBy('fecha_egreso', 'asc')->get();
 
        return response()->json(['data' => $ticketsEgreso], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TicketEgresoStoreRequest $request)
    {
        $ticketEgreso = TicketEgreso::create($request->all());
 
        return response()->json(['data' => $ticketEgreso], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TicketEgreso  $ticketEgreso
     * @return \Illuminate\Http\Response
     */
    public function show(TicketEgreso $ticketEgreso)
    {
        return response()->json(['data' => $ticketEgreso], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TicketEgreso  $ticketEgreso
     * @return \Illuminate\Http\Response
     */
    public function update(TicketEgresoUpdateRequest $request, TicketEgreso $ticketEgreso)
    {
        $ticketEgreso->update($request->all());
 
        return response()->json(['data' => $ticketEgreso], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TicketEgreso  $ticketEgreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(TicketEgreso $ticketEgreso)
    {
        $ticketEgreso->delete();

        return response(null, 204);
    }
}
