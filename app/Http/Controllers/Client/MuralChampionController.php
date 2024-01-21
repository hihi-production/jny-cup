<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Champion;
use Illuminate\Http\Request;

class MuralChampionController extends Controller
{
    public function index()
    {
        $results = Champion::where('competition_name', 'mural')->get();

        return view('pages.dashboard.result.mural.index', compact('results'));
    }

    public function create()
    {
        return view('pages.dashboard.result.mural.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'team' => 'required',
        ]);

        $field = [
            'competition_name' => 'mural',
            'team' => $request->team,
            'place' => $request->place,
        ];

        Champion::create($field);

        return redirect()->route('mural.champion.index')->with('success', 'Data berhasil ditambahkan');
    }
}
