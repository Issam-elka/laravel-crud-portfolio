<?php

namespace App\Http\Controllers;

use App\Models\PortfolioDynamic;
use Illuminate\Http\Request;

class PortfolioDynamicController extends Controller
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
            'img_portfolio' => 'required | min:3 | max:15',
            'icon1' => ['required', 'min:3', 'max:15'],
            'icon2' => ['required', 'min:5', 'max:15']
        ]);

        $store = new PortfolioDynamic();
        $store->img_portfolio = $request->img_portfolio; 
        $store->icon1 = $request->icon1; 
        $store->icon2 = $request->icon2; 
        $store->save();
        return redirect('/portfolioBackDyn')->with('message', "IT'S REGISTERED!");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortfolioDynamic  $portfolioDynamic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showPortfolio = PortfolioDynamic::find($id);
        return view('pages.BackOffice.portfolio.dynamic.portfolioBackDyn', compact('showPortfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortfolioDynamic  $portfolioDynamic
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $editPortfolio = PortfolioDynamic::find($id);
        return view('pages.BackOffice.portfolio.dynamic.portfolioBackDyn', compact('editPortfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortfolioDynamic  $portfolioDynamic
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
        $update = PortfolioDynamic::find($id);
        $update->img_portfolio = $request->img_portfolio; 
        $update->icon1 = $request->icon1; 
        $update->icon2 = $request->icon2; 
        $update->save();
        return redirect('/portfolioBackDyn');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfolioDynamic  $portfolioDynamic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $destroy = PortfolioDynamic::find($id);
        $destroy -> delete();
        return redirect('/portfolioBackDyn') ->with('messageDelete', "IT'S DELETED!");
    
    }
}
