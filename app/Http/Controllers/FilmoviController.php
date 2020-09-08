<?php

namespace App\Http\Controllers;

use App\Filmovi;
use App\Zanr;
use Illuminate\Http\Request;

class FilmoviController extends Controller {

    public function filter($filter) {
        $filmovi = Filmovi::where('naslov', 'like', $filter . '%')->get();

        if (count($filmovi) == 0) {
            $subtitle = "Nema filmova koji počinju s " . $filter;
            return view('filmovis.index', compact('filmovi', 'subtitle', 'filter'));
        } else {

            $subtitle = "Filmovi koji počinju s " . $filter;
            return view('filmovis.index', compact('filmovi', 'subtitle', 'filter'));
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $filmovi = Filmovi::all();
        $subtitle = "Svi filmovi:";
        return view('filmovis.index', compact('filmovi', 'subtitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $zanr = Zanr::all();
        return view('filmovis.create', compact('zanr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Filmovi $filmovi) {
        $validatedData = $request->validate([
            'naslov' => 'required|string|max:99',
            'godina' => 'required|numeric',
            'trajanje' => 'required|numeric',
            'slika' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $filmovi->naslov = $request->input('naslov');
        $filmovi->zanr_id = $request->input('zanr_id');
        $filmovi->godina = $request->input('godina');
        $filmovi->trajanje = $request->input('trajanje');
        $filmovi->slika = $request->input('slika');

        $filmovi = new Filmovi();

        $filmovi->naslov = $request->input('naslov');
        $filmovi->zanr_id = $request->input('zanr_id');
        $filmovi->godina = $request->input('godina');
        $filmovi->trajanje = $request->input('trajanje');
        $filmovi->slika = $request->input('slika');

        if ($request->hasfile('slika')) {
            $file = $request->file('slika');
            $filename = $request->file('slika')->storeAs('', $request->file('slika')->getClientOriginalName());
            $file->move('slike/', $filename);
            $filmovi->slika = $filename;
        } else {
            return $request;
            $filmovi->slika = '';
        }
        $filmovi->save();
        return redirect()->route('filmovi.index')->with('success', 'Film uspješno dodan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function show(Filmovi $filmovi) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function edit(Filmovi $filmovi) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filmovi $filmovi) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filmovi $filmovi) {
        $filmovi->delete();
        return redirect()->route('filmovi.index');
    }

}
