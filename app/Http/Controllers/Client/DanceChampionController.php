<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Champion;
use Illuminate\Http\Request;

class DanceChampionController extends Controller
{
    public function index()
    {
        $results = Champion::where('competition_name', 'dance')->get();

        return view('pages.dashboard.result.dance.index', compact('results'));
    }

    public function create()
    {
        return view('pages.dashboard.result.dance.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'team' => 'required',
        ]);

        $field = [
            'competition_name' => 'dance',
            'team' => $request->team,
            'place' => $request->place,
        ];

        Champion::create($field);

        return redirect()->route('dance.champion.index')->with('success', 'Data berhasil ditambahkan');
    }
}
