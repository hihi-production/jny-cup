<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Champion;
use Illuminate\Http\Request;

class BandChampionController extends Controller
{
    public function index()
    {
        $results = Champion::where('competition_name', 'band')->get();

        return view('pages.dashboard.result.band.index', compact('results'));
    }

    public function create()
    {
        return view('pages.dashboard.result.band.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'team' => 'required',
        ]);

        $field = [
            'competition_name' => 'band',
            'team' => $request->team,
            'place' => $request->place,
        ];

        Champion::create($field);

        return redirect()->route('band.champion.index')->with('success', 'Data berhasil ditambahkan');
    }
}
