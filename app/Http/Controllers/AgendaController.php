<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\guru;
use App\Models\kelas;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agenda = Agenda::all();
        return view('agenda.index', compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $guru = guru::all();
        $kelas = kelas::all();
        return view('agenda.create', compact('kelas', 'guru'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Agenda::create($request->except(['_token']));
        return redirect()->route('agenda.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $agenda = Agenda::find($id);
        $guru = guru::all();
        $kelas = kelas::all();
        return view('agenda.edit', compact('agenda', 'guru', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $agenda = Agenda::find($id);
        $agenda->update($request->except(['_token']));
        return redirect()->route('agenda.index');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Agenda::find($id)->delete();
        return redirect()->route('agenda.index');
    }
}
