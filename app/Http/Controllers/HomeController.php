<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jurusan;
use App\Models\Pendaftar;

class HomeController extends Controller
{
    public function index()
    {
        
        $jurusans = Jurusan::all();
        $pendaftar = Pendaftar::all();
        return view('welcome', [
            'jurusans' => $jurusans,
            'pendaftar' => $pendaftar
        ]);
        
    }
}
