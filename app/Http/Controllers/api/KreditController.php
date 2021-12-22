<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Kredit;
use Illuminate\Http\Request;

class KreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Kredit::all());
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
        $kredit = Kredit::create($request->all());
        return response()->json($kredit);
     } catch (Exception $ex) {
         return responose()->json([
             "error"=>$ex->getMessage()
         ],500);
     }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kredit  $kredit
     * @return \Illuminate\Http\Response
     */
    public function show(Kredit $kredit)
    {
       
       return response()->json($kredit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kredit  $kredit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kredit $kredit)
    {
        try {
            $kredit->update($request->all());
            return response()->json($kredit);
        } catch (\Exception $ex) {
            return responose()->json([
                "error"=>$ex->getMessage()
            ],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kredit  $kredit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kredit $kredit)
    {
        try {
            $kredit->delete();
          return  \response()->noContent();
        } catch (\Exception $ex) {
            return  response()->json([
                "error"=>$ex->getMessage()
            ],500);
        }
    }
}
