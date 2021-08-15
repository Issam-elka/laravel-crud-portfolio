<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
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
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
        $update = About::find($id);
        $update->titreAbout = $request->titreAbout;
        $update->p1 = $request->p1;
        $update->img = $request->img;
        $update->h3 = $request->h3;
        $update->p2 = $request->p2;
        $update->li_birthday = $request->li_birthday;
        $update->birthday = $request->birthday;
        $update->li_website = $request->li_website;
        $update->website = $request->website;
        $update->li_phone = $request->li_phone;
        $update->phone = $request->phone;
        $update->li_city = $request->li_city;
        $update->city = $request->city;
        $update->li_age = $request->li_age;
        $update->age = $request->age;
        $update->li_degree = $request->li_degree;
        $update->degree = $request->degree;
        $update->li_email = $request->li_email;
        $update->email = $request->email;
        $update->li_freelance = $request->li_freelance;
        $update->freelance = $request->freelance;
        $update->p3 = $request->p3;
        $update->save();
        return redirect('/aboutBack');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
