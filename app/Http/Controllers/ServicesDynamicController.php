<?php

namespace App\Http\Controllers;

use App\Models\ServicesDynamic;
use Illuminate\Http\Request;

class ServicesDynamicController extends Controller
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
        request()->validate([
            'icon' => 'required | min:3 | max:15',
            'titre' => ['required', 'min:3', 'max:15'],
            'para' => ['required', 'min:10', 'max:35']
        ]);

        $store = new ServicesDynamic();
        $store->icon = $request->icon; 
        $store->titre = $request->titre; 
        $store->para = $request->para; 
        $store->save();
        return redirect('/servicesBackDyn')->with('message', "IT'S REGISTERED!");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServicesDynamic  $servicesDynamic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showServices = ServicesDynamic::find($id);
        return view('pages.BackOffice.services.dynamic.servicesBackDyn', compact('showServices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesDynamic  $servicesDynamic
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $editServices = ServicesDynamic::find($id);
        return view('pages.BackOffice.services.dynamic.servicesBackDyn', compact('editServices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesDynamic  $portfolioDynamic
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
        $update = ServicesDynamic::find($id);
        $update->icon = $request->icon; 
        $update->titre = $request->titre; 
        $update->para = $request->para; 
        $update->save();
        return redirect('/servicesBackDyn');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesDynamic  $portfolioDynamic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $destroy = ServicesDynamic::find($id);
        $destroy -> delete();
        return redirect('/servicesBackDyn') ->with('messageDelete', "IT'S DELETED!");
    
    }
}
