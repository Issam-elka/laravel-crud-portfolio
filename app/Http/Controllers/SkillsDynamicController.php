<?php

namespace App\Http\Controllers;

use App\Models\SkillsDynamic;
use Illuminate\Http\Request;

class SkillsDynamicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skillsDynamics = SkillsDynamic::all();
        return view('pages.BackOffice.skills.dynamic.skillsBackDyn', compact('skillsDynamics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'span' => 'required | min:3 | max:15',
            'i' => ['required', 'min:1', 'max:10'],
            'aria' => ['required', 'min:1', 'max:15']
        ]);

        $store = new SkillsDynamic();
        $store->span = $request->span; 
        $store->i = $request->i; 
        $store->aria = $request->aria; 
        $store->save();
        return redirect('/skillsBackDyn')->with('message', "IT'S REGISTERED!");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SkillsDynamic  $skillsDynamic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showskills = SkillsDynamic::find($id);
        return view('pages.BackOffice.skills.dynamic.skillsBackDyn', compact('showskills'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkillsDynamic  $skillsDynamic
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $editSkills = SkillsDynamic::find($id);
        return view('pages.BackOffice.skills.dynamic.skillsBackDyn', compact('editHome'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SkillsDynamic  $skillsDynamic
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
        $update = SkillsDynamic::find($id);
        $update->span = $request->span; 
        $update->i = $request->i; 
        $update->aria = $request->aria; 
        $update->save();
        return redirect('/skillsBackDyn');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkillsDynamic  $skillsDynamic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $destroy = SkillsDynamic::find($id);
        $destroy -> delete();
        return redirect('/skillsBackDyn') ->with('messageDelete', "IT'S DELETED!");
    
    }
}
