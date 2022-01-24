<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hazik;

class HaziController extends Controller
{
    public function index()
    {
        $hazik = Hazik::all();
        return response()->json($hazik);
    }
}
