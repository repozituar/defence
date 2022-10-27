<?php

namespace App\Http\Controllers\Fr;

use App\Http\Controllers\Controller;
use App\Models\Sayfa;
use Illuminate\Http\Request;

class SayfaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Sayfa::first()->translate('fr');
        return view('home', compact('page'));
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
     * @param  \App\Models\Sayfa  $sayfa
     * @return \Illuminate\Http\Response
     */
    public function show(Sayfa $sayfa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sayfa  $sayfa
     * @return \Illuminate\Http\Response
     */
    public function edit(Sayfa $sayfa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sayfa  $sayfa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sayfa $sayfa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sayfa  $sayfa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sayfa $sayfa)
    {
        //
    }
}
