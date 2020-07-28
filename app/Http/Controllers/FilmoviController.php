<?php

namespace App\Http\Controllers;

use App\Filmovi;
use Illuminate\Http\Request;

class FilmoviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filmovi = Filmovi::all();
        return view('filmovis.index', compact('filmovi'));
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
     * @param  \App\Filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function show(Filmovi $filmovi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function edit(Filmovi $filmovi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filmovi $filmovi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filmovi $filmovi)
    {
        $filmovi->delete();
        return redirect()->route('filmovi.index');
    }
}
