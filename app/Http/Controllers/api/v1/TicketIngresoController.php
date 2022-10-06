<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\TicketIngreso;
use Illuminate\Http\Request;
use App\Http\Requests\api\v1\TicketIngresoStoreRequest;
use App\Http\Requests\api\v1\TicketIngresoUpdateRequest;

class TicketIngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticketsIngreso = TicketIngreso::orderBy('fecha_egreso', 'asc')->get();
 
        return response()->json(['data' => $ticketsIngreso], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TicketIngresoStoreRequest $request)
    {
        $ticketIngreso = ticketIngreso::create($request->all());
 
        return response()->json(['data' => $ticketIngreso], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TicketEgreso  $ticketEgreso
     * @return \Illuminate\Http\Response
     */
    public function show(TicketIngreso $ticketIngreso)
    {
        return response()->json(['data' => $ticketIngreso], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TicketEgreso  $ticketEgreso
     * @return \Illuminate\Http\Response
     */
    public function update(TicketIngresoUpdateRequest $request, TicketIngreso $TicketIngreso)
    {
        $TicketIngreso->update($request->all());
 
        return response()->json(['data' => $TicketIngreso], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TicketEgreso  $ticketEgreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(TicketIngreso $ticketIngreso)
    {
        $ticketIngreso->delete();

        return response(null, 204);
    }
}
