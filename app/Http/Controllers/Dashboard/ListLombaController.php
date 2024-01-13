<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Competitions;
use Illuminate\Http\Request;

class ListLombaController extends Controller
{
    public function index(){
        $competitions = Competitions::latest()->get();

        return view('pages.dashboard.list-lomba.index', compact('competitions'));
    }

    public function create(){
        return view('pages.dashboard.list-lomba.create');
    }
    
    public function store(Request $request){

        $request->validate([
            'Competition' => 'required|min:3',
            'Status' => 'required',
            'Start_Date' => 'required|date',
            'End_Date' => 'nullable|date',
        ]);

        $field = [
            'Competition' => $request->Competition,
            'Status' => $request->Status,
            'Start_Date' => $request->Start_Date,
            'End_Date' => $request->End_Date,
        ];

        Competitions::create($field);
        return redirect()->route('lomba.index');
    }

    public function edit($id)
    {
        $competition = Competitions::find($id);
        return view ('pages.dashboard.list-lomba.edit', compact('competition'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Competition' => 'required|min:3',
            'Status' => 'required',
            'Start_Date' => 'required|date',
            'End_Date' => 'nullable|date',
        ]);

        $field = [
            'Competition' => $request->Competition,
            'Status' => $request->Status,
            'Start_Date' => $request->Start_Date,
            'End_Date' => $request->End_Date,
        ];

        $competition  = Competitions::find($id);

        $competition->update($field);

        return redirect()->route('lomba.index');
    }

    public function delete($id){
        $competition = Competitions::find($id);
        $competition->delete();
        return redirect()->route('lomba.index');
    }
}
