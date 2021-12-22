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
        return response()->json(Zahtev::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $zahtev = Zahtev::create($request->all());
            return response()->json($zahtev);
         } catch (Exception $ex) {
             return responose()->json([
                 "error"=>$ex->getMessage()
             ],500);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zahtev  $zahtev
     * @return \Illuminate\Http\Response
     */
    public function show(Zahtev $zahtev)
    {
        return response()->json($zahtev);
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
        try {
            $zahtev->update($request->all());
            return response()->json($zahtev);
        } catch (\Exception $ex) {
            return responose()->json([
                "error"=>$ex->getMessage()
            ],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zahtev  $zahtev
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zahtev $zahtev)
    {
        try {
            $zahtev->delete();
          return  \response()->noContent();
        } catch (\Exception $ex) {
            return  response()->json([
                "error"=>$ex->getMessage()
            ],500);
        }
    }
}
