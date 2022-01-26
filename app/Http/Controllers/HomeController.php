<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hazi;

class HomeController extends Controller
{
    public function index() {
        $haziCount = Hazi::count();

        return view('stats', [
            'haziCount' => $haziCount,
        ]);
    }
}
