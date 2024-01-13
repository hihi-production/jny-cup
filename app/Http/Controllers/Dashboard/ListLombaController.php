<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Lomba;
use Illuminate\Http\Request;

class ListLombaController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.list-lomba.index');
    }

    public function create()
    {
        return view('pages.dashboard.list-lomba.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'status' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
        ]);

        $field = [
            'name' => $request->name,
            'status' => $request->status,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ];

        Lomba::create($field);

        return redirect()->route('lomba.index');
    }
}
