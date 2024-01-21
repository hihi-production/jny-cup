<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Champion;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        $basketMales = Champion::where('competition_name', 'basketball')->where('category', 'male')->get();
        $basketFemales = Champion::where('competition_name', 'basketball')->where('category', 'female')->get();

        $fencings = Champion::where('competition_name', 'fencing')->get();
        $swimmings = Champion::where('competition_name', 'swimming')->get();
        $murals = Champion::where('competition_name', 'mural')->get();
        $dances = Champion::where('competition_name', 'dance')->get();
        $bands = Champion::where('competition_name', 'band')->get();

        return view('pages.client.result', compact('basketMales', 'basketFemales', 'fencings', 'swimmings', 'murals', 'dances', 'bands'));
    }
}
