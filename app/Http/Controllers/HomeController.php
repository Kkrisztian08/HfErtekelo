<?php

namespace App\Http\Controllers;

use App\Models\Hazi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $haziCount = Hazi::count();
        

        return view('stat', [
            'haziCount' => $haziCount,
        ]);
    }
}
