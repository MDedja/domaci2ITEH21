<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeretanaResurs;
use App\Models\Teretana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teretane = Teretana::all();
        return TeretanaResurs::collection($teretane);
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
        $validator = Validator::make($request->all(), [
            'naziv_teretane' => 'required',
            'lokacija' => 'required',
            'grad' => 'required',
            'broj_clanova' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['Error!', $validator->errors()]);
        }

        $teretana = Teretana::create([
            'naziv_teretane' => $request->naziv_teretane,
            'lokacija' => $request->lokacija,
            'grad' => $request->grad,
            'broj_clanova' => $request->broj_clanova,
        ]);

        return response()->json(['Successfully saved!', new TeretanaResurs($teretana)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teretana  $teretana
     * @return \Illuminate\Http\Response
     */
    public function show(Teretana $teretana)
    {
        return new TeretanaResurs($teretana);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teretana  $teretana
     * @return \Illuminate\Http\Response
     */
    public function edit(Teretana $teretana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teretana  $teretana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teretana $teretana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teretana  $teretana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teretana $teretana)
    {
        $teretana->delete();
        return response()->json('Successfully deleted!');
    }
}
