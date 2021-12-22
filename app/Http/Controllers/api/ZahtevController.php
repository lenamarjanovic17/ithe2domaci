<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Zahtev;
use Illuminate\Http\Request;

class ZahtevController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zahtev  $zahtev
     * @return \Illuminate\Http\Response
     */
    public function show(Zahtev $zahtev)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zahtev  $zahtev
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zahtev $zahtev)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zahtev  $zahtev
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zahtev $zahtev)
    {
        //
    }
}
