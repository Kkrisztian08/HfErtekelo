<?php

namespace App\Http\Controllers;

use App\Http\Requests\HaziRequest;
use App\Http\Requests\HaziUpdateRequest;
use App\Models\Hazi;
use Illuminate\Http\Request;

class HaziController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hazis = Hazi::orderBy('diak')->get();
        return view('hazis.index', [ 'hazis' => $hazis ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hazis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HaziRequest $request)
    {
        $adatok = $request->only(['diak', 'url', 'jegy','ertekeles']);
        $hazi = new Hazi();
        $hazi->fill($adatok);
        $hazi->save();
        return redirect()->route('hazis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hazi  $hazi
     * @return \Illuminate\Http\Response
     */
    public function show(Hazi $hazi)
    {
        return view('hazis.show', ['hazis'=> $hazi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hazi  $hazi
     * @return \Illuminate\Http\Response
     */
    public function edit(Hazi $hazi)
    {
        return view('hazis.edit', ['hazis'=> $hazi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\HaziUpdateRequest  $request
     * @param  \App\Models\Hazi  $hazi
     * @return \Illuminate\Http\Response
     */
    public function update(HaziUpdateRequest $request, Hazi $hazi)
    {
        $adatok = $request->only(['diak', 'url', 'jegy','ertekeles']);
        $hazi->fill($adatok);
        $hazi->save();
        return redirect()->route('hazis.show', $hazi->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hazi  $hazi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hazi $hazi)
    {
        $hazi->delete();
        return redirect()->route('hazis.index');
    }
}
