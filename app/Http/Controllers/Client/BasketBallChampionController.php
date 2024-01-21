<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Champion;
use Illuminate\Http\Request;

class BasketBallChampionController extends Controller
{
    public function index()
    {
        $results = Champion::where('competition_name', 'basketball')->get();

        return view('pages.dashboard.result.basket.index', compact('results'));
    }

    public function create()
    {
        return view('pages.dashboard.result.basket.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'team' => 'required',
        ]);

        $field = [
            'competition_name' => 'basketball',
            'category' => $request->category,
            'team' => $request->team,
            'place' => $request->place,
        ];

        Champion::create($field);

        return redirect()->route('basket.champion.index')->with('success', 'Data berhasil ditambahkan');
    }
}
