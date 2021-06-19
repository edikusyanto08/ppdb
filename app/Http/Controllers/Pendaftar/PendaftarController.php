<?php

namespace App\Http\Controllers\Pendaftar;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;
Use Alert;
use PDF;
use App\User;
use App\Models\Pendaftar;
use App\Models\Jurusan;
use App\Http\Controllers\Controller;

class PendaftarController extends Controller
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
        
            //return view('pendaftar.formulir');
        
    }
    public function formulir()
    {
        $cek1 = Auth::user();
        $cek2 = $cek1->id;
        $cek = DB::table('pendaftar')->where('user_id', $cek2)->first();
        if(!$cek == NULL){
            return redirect('/dashboard');
        }
        $terdaftar = DB::table('users')->join('pendaftar', 'users.id', '=','pendaftar.user_id')->get();
        $user = Auth::user();
        $user_id = $user->id;
        $jurusans = Jurusan::all();
        
            return view('pendaftar.formulir',[
                'user' => $user, 
                'jurusans' => $jurusans,
                compact('terdaftar')
            ]);
        
            
        
    }
    public function daftar(Request $request)
    {
        $user = Auth::user();
        $user_id = $user->id;
            
        $Pendaftar = new Pendaftar();
        $Pendaftar->user_id = $user_id;
        $Pendaftar->nama_lengap = $user->name;
        $Pendaftar->nisn = $user->nisn;
        $Pendaftar->jenis_kelamin = $request->jenis_kelamin;
        $Pendaftar->nik = $request->nik;
        $Pendaftar->no_kk = $request->no_kk;
        $Pendaftar->tempat_lahir = $request->tempat_lahir;
        $Pendaftar->tgl_lahir = $request->tgl_lahir;
        $Pendaftar->noreg_akta = $request->noreg_akta;
        $Pendaftar->agama = $request->agama;
        $Pendaftar->alamat = $request->alamat;
        $Pendaftar->rt = $request->rt;
        $Pendaftar->rw = $request->rw;
        $Pendaftar->desa = $request->desa;
        $Pendaftar->kecamatan = $request->kecamatan;
        $Pendaftar->kabupaten = $request->kabupaten;
        $Pendaftar->provinsi = $request->provinsi;
        $Pendaftar->kodepos = $request->kodepos;
        $Pendaftar->tempat_tinggal = $request->tempat_tinggal;
        $Pendaftar->transfortasi = $request->transfortasi;
        $Pendaftar->anakke = $request->anakke;
        $Pendaftar->kip = $request->kip;
        $Pendaftar->ayahnama = $request->ayahnama;
        $Pendaftar->ayahnik = $request->ayahnik;
        $Pendaftar->ayahtahun = $request->ayahtahun;
        $Pendaftar->ayahpendidikan = $request->ayahpendidikan;
        $Pendaftar->ayahpekerjaan = $request->ayahpekerjaan;
        $Pendaftar->ayahpenghasilan = $request->ayahpenghasilan;
        $Pendaftar->ibunama = $request->ibunama;
        $Pendaftar->ibunik = $request->ibunik;
        $Pendaftar->ibutahun = $request->ibutahun;
        $Pendaftar->ibupendidikan = $request->ibupendidikan;
        $Pendaftar->ibupekerjaan = $request->ibupekerjaan;
        $Pendaftar->ibupenghasilan = $request->ibupenghasilan;
        $Pendaftar->walinama = $request->walinama;
        $Pendaftar->walinik = $request->walinik;
        $Pendaftar->walitahun = $request->walitahun;
        $Pendaftar->walipendidikan = $request->walipendidikan;
        $Pendaftar->walipekerjaan = $request->walipekerjaan;
        $Pendaftar->walipenghasilan = $request->walipenghasilan;
        $Pendaftar->nohp = $request->nohp;
        $Pendaftar->email = $request->email;
        $Pendaftar->tinggi = $request->tinggi;
        $Pendaftar->berat = $request->berat;
        $Pendaftar->jarak = $request->jarak;
        $Pendaftar->waktutempuh = $request->waktutempuh;
        $Pendaftar->jumlahsaudara = $request->jumlahsaudara;
        $Pendaftar->sekolahasal   = $user->sekolahasal;
        $Pendaftar->noregistrasi = $request->noregistrasi;
        $Pendaftar->jurusan1 = $request->jurusan1;
        $Pendaftar->jurusan2 = $request->jurusan2;
        $Pendaftar->nowa = $request->nowa;
        $Pendaftar->s1indonesia = $request->s1indonesia;
        $Pendaftar->s1inggris = $request->s1inggris;
        $Pendaftar->s1matematika = $request->s1matematika;
        $Pendaftar->s1ipa = $request->s1ipa;
        $Pendaftar->s2indonesia = $request->s2indonesia;
        $Pendaftar->s2inggris = $request->s2inggris;
        $Pendaftar->s2matematika = $request->s2matematika;
        $Pendaftar->s2ipa = $request->s2ipa;
        $Pendaftar->s3indonesia = $request->s3indonesia;
        $Pendaftar->s3inggris = $request->s3inggris;
        $Pendaftar->s3matematika = $request->s3matematika;
        $Pendaftar->s3ipa = $request->s3ipa;
        $Pendaftar->s4indonesia = $request->s4indonesia;
        $Pendaftar->s4inggris = $request->s4inggris;
        $Pendaftar->s4matematika = $request->s4matematika;
        $Pendaftar->s4ipa = $request->s4ipa;
        $Pendaftar->s5indonesia = $request->s5indonesia;
        $Pendaftar->s5inggris = $request->s5inggris;
        $Pendaftar->s5matematika = $request->s5matematika;
        $Pendaftar->s5ipa = $request->s5ipa;
        $Pendaftar->nohp = $user->nowa;
        $Pendaftar->email = $user->email;
        $Pendaftar->status = '0';

        $Pendaftar->save();

        //return $Pendaftar;
        //return redirect()->back('home')->with('success', 'Registrasi Anda telah berhasil!.');
        
        /*DB::table('pendaftar')->insert([
            'nama_lengap' => $request->nama_lengap,
            'nisn' => $request->nisn

        ]);*/
        return redirect('/dashboard');
        
    }
    public function cetak(){
        $user = Auth::user();
        $user_ids = $user->id;
        $siswa = DB::table('pendaftar')->where('user_id', $user_ids)->first();
        //$pendaftar = Pendaftar::get('user_id')->with(' $user->id');

        $pdf = PDF::loadview('pendaftar.buktidaftar',['siswa'=>$siswa]);
    	return $pdf->download('Bukti-Pendaftaran.pdf');
        //return view('pendaftar.buktidaftar',['user' => $users]);

    }
}
