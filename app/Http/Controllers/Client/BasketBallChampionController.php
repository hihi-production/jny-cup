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

        return redirect()->route('basket.champion.index')->with([
            'message' => 'Basketball Champions created successfully.',
            'status'  => 'success',
        ]);
    }

    public function edit($id)
    {
        $result = Champion::findOrFail($id);

        return view('pages.dashboard.result.basket.edit', compact('result'));
    }

    public function update(Request $request, $id)
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

        Champion::findOrFail($id)->update($field);

        return redirect()->route('basket.champion.index')->with([
            'message' => 'Basketball Champions updated successfully.',
            'status'  => 'success',
        ]);
    }
}
