<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Models\Jurusan;
use App\Models\Pendaftar;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $user = Auth::user()->id;
        $jurusane = DB::table('pendaftar')->where('user_id', $user)->first();
        $jurusan = $jurusane->jurusan1;
        $linkwa = $jurusan;
        if($jurusan == 1){
            $jurusan = "Teknik Pemesinan";
        } elseif($jurusan == 2){
            $jurusan = "Teknik Kendaraan Ringan Otomotif";
        } elseif($jurusan == 3){
            $jurusan = "Teknik dan Bisnis Sepeda Motor";
        } elseif($jurusan == 4){
            $jurusan = "Teknik Komputer dan Jaringan";
        } elseif($jurusan == 5){
            $jurusan = "Multimedia";
        } elseif($jurusan == 6){
            $jurusan = "Rekayasa Prangkat Lunak";
        } elseif($jurusan == 7){
            $jurusan = "Otomatisasi dan Tata Kelola Perkantoran";
        } elseif($jurusan == 8){
            $jurusan = "Akuntansi dan Keuangan Lembaga";
        } elseif($jurusan == 9){
            $jurusan = "Agribisnis Pengolahan Hasil Perikanan";
        } elseif($jurusan == 10){
            $jurusan = "Perhotelan";
        };


        if($linkwa == 1){
            $linkwa = "https://chat.whatsapp.com/C3AyRuveDocBxSL0MCmizP";
        } elseif($linkwa == 2){
            $linkwa = "https://chat.whatsapp.com/IljMrNjOe2mBfyh46NaQon";
        } elseif($linkwa == 3){
            $linkwa = "https://chat.whatsapp.com/LevNJowqX4a3qTw2zBTw5P";
        } elseif($linkwa == 4){
            $linkwa = "https://chat.whatsapp.com/IKUrORlKBhIHYNpnnFNsk5";
        } elseif($linkwa == 5){
            $linkwa = "https://chat.whatsapp.com/GMoNaf0vqzECRDZPWxVSnI";
        } elseif($linkwa == 6){
            $linkwa = "https://chat.whatsapp.com/IolDjfYGg60FkTsuEZuZtL";
        } elseif($linkwa == 7){
            $linkwa = "https://chat.whatsapp.com/GBbMoLIfrKNHqLyNfdvTE6";
        } elseif($linkwa == 8){
            $linkwa = "https://chat.whatsapp.com/HJmXwPcGixwIaIpkkF2Ikr";
        } elseif($linkwa == 9){
            $linkwa = "https://chat.whatsapp.com/Gr3CKVoAe4W7pUIm86Gxyk";
        } elseif($linkwa == 10){
            $linkwa = "https://chat.whatsapp.com/D4VmrupbTMXHYmafqljpIT";
        };
        $counpendaftar = DB::table('pendaftar')->count();
        $pendaftar = Pendaftar::all();
        $jurusans = Jurusan::all();
        if(Auth::user()->is_admin == 1){
            return view('admin.dashboard',[
                'counpendaftar'=>$counpendaftar,
                'jurusan' => $jurusan,
                'jurusane' => $jurusane,
                'jurusans' => $jurusans,
                'linkwa' => $linkwa,
                'pendaftar' => $pendaftar
            ]);
        } else{
            return view('pendaftar.dashboard',[
                'counpendaftar'=>$counpendaftar,
                'jurusan' => $jurusan,
                'jurusane' => $jurusane,
                'linkwa' => $linkwa
            ]);
        }

        ;
    }


    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id user
        $pendaftar = Pendaftar::find($id);
        return view('pendaftar.detail', compact('pendaftar'));
    }

    public function edit($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id user untuk diedit
        $jurusans = Jurusan::all();
        $pendaftar = Pendaftar::find($id);
        return view('pendaftar.edit', compact('pendaftar', 'jurusans'));
    }

    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'nama_lengap' => 'required',
            'nisn' => 'required',
            'sekolahasal' => 'required',
            //'email' => 'required',
            //'password' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        Pendaftar::find($id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('dashboard.index')
            ->with('success', 'Data Berhasil Diupdate');
    }

    /*public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        Pendaftar::find($id)->delete();
        return redirect()->route('pendaftar.index')
            ->with('success', 'Data Berhasil Dihapus');
    }*/
}
