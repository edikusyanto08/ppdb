<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jurusan;
use App\Models\Pendaftar;
use App\Models\Settings;

class HomeController extends Controller
{
    public function index()
    {
        //$Setting = Settings::first();
        //$tutupdaftar = $Setting->status;
        $jurusans = Jurusan::all();
        $pendaftar = Pendaftar::all();
        //$countterdaftar = Pendaftar::where('jurusan1', '$jurusans->id')->count();
        return view('welcome', [
            'jurusans' => $jurusans,
            'pendaftar' => $pendaftar,
            //'tutupdaftar' => $tutupdaftar,
           // 'countterdaftar' => $countterdaftar
        ]);
        
    }
}
