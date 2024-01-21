<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Champion;
use Illuminate\Http\Request;

class SwimmingChampionController extends Controller
{
    public function index()
    {
        $results = Champion::where('competition_name', 'swimming')->get();

        return view('pages.dashboard.result.swimming.index', compact('results'));
    }

    public function create()
    {
        return view('pages.dashboard.result.swimming.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'team' => 'required',
        ]);

        $field = [
            'competition_name' => 'swimming',
            'team' => $request->team,
            'place' => $request->place,
        ];

        Champion::create($field);

        return redirect()->route('swimming.champion.index')->with('success', 'Data berhasil ditambahkan');
    }
}
