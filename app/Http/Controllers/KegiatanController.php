<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    function index(){
        return view('kegiatan.index');
    }
}
