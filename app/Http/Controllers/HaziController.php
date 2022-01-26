<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hazi;
use App\Http\Requests\HaziRequest;
use App\Http\Requests\HaziUpdateRequest;

class HaziController extends Controller
{

    public function index()
    {
        $hf = Hazi::orderBy('nev')->get();
        return view('hf.index', [ 'hazis' => $hf ]);
    }

    public function create()
    {
        return view('hf.create');
    }

    public function store(HaziRequest $request)
    {
        $adattag = $request->only(['nev', 'bekuldes', 'jegy','ertekeles','url']);
        $hf = new Hazi();
        $hf->fill($adattag);
        $hf->save();
        return redirect()->route('hf.index');
    }

    public function show(Hazi $hf)
    {
        return view('hf.show', ['hazis'=> $hf]);
    }

    public function edit(Hazi $hf)
    {
        return view('hf.edit', ['hazis'=> $hf]);
    }

    public function update(HaziUpdateRequest $request, Hazi $hf)
    {
        $adattag = $request->only(['nev', 'bekuldes', 'jegy','ertekeles']);
        $hf->fill($adattag);
        $hf->save();
        return redirect()->route('hf.show', $hf->id);
    }

    public function destroy(Hazi $hf)
    {
        $hf->delete();
        return redirect()->route('hf.index');
    }
}
