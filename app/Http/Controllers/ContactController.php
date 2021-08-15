<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
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
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
        $update = Contact::find($id);
        $update->titreContact = $request->titreContact;
        $update->p = $request->p;
        $update->icon1 = $request->icon1;
        $update->titre1 = $request->titre1;
        $update->p1 = $request->p1;
        $update->icon2 = $request->icon2;
        $update->titre2 = $request->titre2;
        $update->p2 = $request->p2;
        $update->icon3 = $request->icon3;
        $update->titre3 = $request->titre3;
        $update->p3 = $request->p3;
        $update->formName = $request->formName;
        $update->formEmail = $request->formEmail;
        $update->formSubject = $request->formSubject;
        $update->formMessage = $request->formMessage;
        $update->btn = $request->btn;
        $update->save();
        return redirect('/contactBack');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
