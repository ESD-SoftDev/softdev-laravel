<?php

namespace App\Http\Controllers;

use App\Models\Articel;
use Illuminate\Http\Request;

class ArticelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articels = Articel::latest()->get();

        return view('articels.index', compact('articels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articel = new Articel;
        $articel->judul = $request['judul'];
        $articel->artikel = $request['artikel'];
        $articel->save();

        $articels = Articel::latest()->get();

        return view('articels.index', compact('articels'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articel  $articel
     * @return \Illuminate\Http\Response
     */
    public function show(Articel $articel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articel  $articel
     * @return \Illuminate\Http\Response
     */
    public function edit(Articel $articel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articel  $articel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articel $articel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articel  $articel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articel $articel)
    {
        //
    }
}
