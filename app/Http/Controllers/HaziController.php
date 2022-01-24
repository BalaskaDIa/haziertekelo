<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hazik;
use App\Http\Requests\HaziRequest;
use App\Http\Requests\HaziUpdateRequest;

class HaziController extends Controller
{

    public function index()
    {
        $hazik = Hazik::all();
        return response()->json($hazik);
    }

    public function create()
    {
        return view('hf.create');
    }

    public function store(HaziRequest $request)
    {
        $h = new Hazik();
        $h->fill($request->all());
        $h->save();
        return response()->json($h, 201);
    }

    public function show(int $id)
    {
        $h = Hazik::findOrFail($id);
        return response()->json($h);
    }

    public function edit($id)
    {
        //
    }

    public function update(HaziUpdateRequest $request, int $id)
    {
        $h = Hazik::findOrFail($id);
        $h->fill($request->all());
        $h->save();
        return response()->json($h, 200);
    }

    public function destroy(int $id)
    {
        Hazik::destroy($id);
        return response()->noContent();
    }
}
