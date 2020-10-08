<?php

namespace App\Http\Controllers;

use App\aset;
use Illuminate\Http\Request;

use App\kiba;
use App\kibc;
use App\kibd;

class KibController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kiba()
    {
        $kiba = kiba::all();
        return view('kib.kiba', compact('kiba'));
    }
    //==========================================================
    // DATA KIB-B
    //==========================================================
    public function kibb()
    {
        $kibb = aset::where('kib', '=', 'KIB B')->get();
        return view('kib.kibb', compact('kibb'));
    }
    //==========================================================
    // DATA KIB-C
    //==========================================================
    public function kibc()
    {
        $kibc = kibc::all();
        return view('kib.kibc', compact('kibc'));
    }
    //==========================================================
    // DATA KIB-D
    //==========================================================
    public function kibd()
    {
        $kibd = kibd::all();
        return view('kib.kibd', compact('kibd'));
    }
    //==========================================================
    // DATA KIB-E
    //==========================================================
    public function kibe()
    {
        $kibe = aset::where('kib', '=', 'KIB E')->get();
        return view('kib.kibe', compact('kibe'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
