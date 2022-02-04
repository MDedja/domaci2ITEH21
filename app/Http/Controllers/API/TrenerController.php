<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Trener;
use Illuminate\Http\Request;
use App\Http\Resources\TrenerResurs;

class TrenerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treneri = Trener::all();
        return TrenerResurs::collection($treneri);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trener  $trener
     * @return \Illuminate\Http\Response
     */
    public function show(Trener $trener)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trener  $trener
     * @return \Illuminate\Http\Response
     */
    public function edit(Trener $trener)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trener  $trener
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trener $trener)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trener  $trener
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trener $trener)
    {
        $trener->delete();
        return response()->json('Successfully deleted!');
    }
}
