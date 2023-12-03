<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    function index()
    {
    return view('agenda.index');
    }
}
