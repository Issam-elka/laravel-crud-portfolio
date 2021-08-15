<?php

namespace App\Http\Controllers;

use App\Models\header;
use GuzzleHttp\Psr7\Header as Psr7Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
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
     * @param  \App\Models\header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(header $header)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\header  $header
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
        $update = Header::find($id);
        $update->img = $request->img;
        $update->h1 = $request->h1;
        $update->icon1 = $request->icon1;
        $update->icon2 = $request->icon2;
        $update->icon3 = $request->icon3;
        $update->icon4 = $request->icon4;
        $update->icon5 = $request->icon5;
        $update->nav1 = $request->nav1;
        $update->nav2 = $request->nav2;
        $update->nav3 = $request->nav3;
        $update->nav4 = $request->nav4;
        $update->nav5 = $request->nav5;
        $update->btn_icon = $request->btn_icon;
        $update->save();
        return redirect('/headerBack');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(header $header)
    {
        //
    }
}
