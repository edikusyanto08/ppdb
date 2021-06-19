<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Models\Jurusan;
use App\Models\Pendaftar;

class DashboardAdminController extends Controller
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
        
        $jurusane = DB::table('pendaftar')->where('id')->first();
        $counterdaftar = DB::table('pendaftar')->count()-1;
        $counpendaftar = DB::table('users')->count();
        $pendaftar = Pendaftar::all();
        $jurusans = Jurusan::all();
        if(Auth::user()->is_admin == 1){
            return view('admin.dashboard',[
                'counterdaftar'=>$counterdaftar,
                'counpendaftar'=>$counpendaftar,
                //'jurusan' => $jurusan,
                //'siswa' => $siswa,
                'jurusans' => $jurusans,
                //'linkwa' => $linkwa,
                'pendaftar' => $pendaftar,
                
            ]);
        }
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
        return redirect()->route('dashboardadmin.index')
            ->with('success', 'Data Berhasil Diupdate');
    }

    /*public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        Pendaftar::find($id)->delete();
        return redirect()->route('pendaftar.index')
            ->with('success', 'Data Berhasil Dihapus');
    }*/
    public function changePendaftarStatus(Request $request)
    {
        $pendaftar = Pendaftar::find($request->siswa_id);
        $pendaftar->status = $request->status;
        $pendaftar->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
}
