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
        $hazi = Hazi::all();
        return response()->json($hazi);
    }

    public function create()
    {
        return view('hazi.create');
    }

    public function store(HaziRequest $request)
    {
        $h = new Hazi();
        $h->fill($request->all());
        $h->save();
        return response()->json($h, 201);
    }

    public function show(int $id)
    {
        $h = Hazi::findOrFail($id);
        return response()->json($h);
    }

    public function edit($id)
    {
        //
    }

    public function update(HaziUpdateRequest $request, int $id)
    {
        $h = Hazi::findOrFail($id);
        $h->fill($request->all());
        $h->save();
        return response()->json($h, 200);
    }

    public function destroy(int $id)
    {
        Hazi::destroy($id);
        return response()->noContent();
    }
}
