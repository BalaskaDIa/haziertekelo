<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hazik;

class HomeController extends Controller
{
    public function index() {
        $haziCount = Hazik::count();

        return view('stats', [
            'haziCount' => $haziCount,
        ]);
    }
}
