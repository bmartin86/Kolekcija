<?php

namespace App\Http\Controllers;

use App\Filmovi;
use App\Zanr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use function back;
use function view;

class ZanrController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $zanr = Zanr::all();
        $subtitle = "Svi žanrovi:";
        return view('zanrs.index', compact('zanr', 'subtitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Zanr  $zanr
     * @return \Illuminate\Http\Response
     */
    public function show(Zanr $zanr) {
        $lista_filmova_odabranog_zanra = $zanr->filmovi()->get();
        if (count($lista_filmova_odabranog_zanra) == 0) {
            Session::flash('message', "Nema filmova s odabranim žanrom");
            return Redirect::back();
        } else {
            return view('zanrs.show', compact('lista_filmova_odabranog_zanra'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Zanr  $zanr
     * @return \Illuminate\Http\Response
     */
    public function edit(Zanr $zanr) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Zanr  $zanr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zanr $zanr) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Zanr  $zanr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zanr $zanr) {
        //
    }

}
