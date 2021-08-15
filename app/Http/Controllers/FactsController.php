<?php

namespace App\Http\Controllers;

use App\Models\Facts;
use Illuminate\Http\Request;

class FactsController extends Controller
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
     * @param  \App\Models\Facts  $facts
     * @return \Illuminate\Http\Response
     */
    public function show(Facts $facts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facts  $facts
     * @return \Illuminate\Http\Response
     */
    public function edit(Facts $facts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facts  $facts
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
        $update = Facts::find($id);
        $update->titreFacts = $request->titreFacts;
        $update->p1 = $request->p1;
        $update->icon1 = $request->icon1;
        $update->span = $request->span;
        $update->p2 = $request->p2;
        $update->strong1 = $request->strong1;
        $update->icon2 = $request->icon2;
        $update->span2 = $request->span2;
        $update->p3 = $request->p3;
        $update->strong2 = $request->strong2;
        $update->icon3 = $request->icon3;
        $update->span3 = $request->span3;
        $update->p4 = $request->p4;
        $update->strong3 = $request->strong3;
        $update->icon4 = $request->icon4;
        $update->span4 = $request->span4;
        $update->p5 = $request->p5;
        $update->strong4 = $request->strong4;
        $update->save();
        return redirect('/factsBack');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facts  $facts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facts $facts)
    {
        //
    }
}
