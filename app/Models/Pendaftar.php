<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Pendaftar extends Authenticatable
{
    protected $table = 'pendaftar';
    use HasFactory, Notifiable;

    protected $fillable = [
        'nisn',
        'nama_lengap',
        'jenis_kelamin',
        'nik',
        'no_kk',
        'tempat_lahir',
        'tgl_lahir',
        'noreg_akta',
        'agama',
        'alamat',
        'rt',
        'rw',
        'desa',
        'kecamatan',
        'kodepos',
        'tempat_tinggal',
        'transfortasi',
        'anakke',
        'kip',
        'ayahnama',
        'ayahnik',
        'ayahtahun',
        'ayahpendidikan',
        'ayahpekerjaan',
        'ayahpenghasilan',
        'ibunama',
        'ibunik',
        'ibutahun',
        'ibupendidikan',
        'ibupekerjaan',
        'ibupenghasilan',
        'walinama',
        'walinik',
        'walitahun',
        'walipendidikan',
        'walipekerjaan',
        'walipenghasilan',
        'nohp',
        'email',
        'tinggi',
        'berat',
        'jarak',
        'waktutempuh',
        'jumlahsaudara',
        'sekolahasal',
        'noregistrasi',
        'jurusan1',
        'jurusan2',
        'tgl_daftar',
        'nowa',
        's1indonesia',
        's1inggris',
        's1matematika',
        's1ipa',
        's2indonesia',
        's2inggris',
        's2matematika',
        's2ipa',
        's3indonesia',
        's3inggris',
        's3matematika',
        's3ipa',
        's4indonesia',
        's4inggris',
        's4matematika',
        's4ipa',
        's5indonesia',
        's5inggris',
        's5matematika',
        's5ipa',
        'statusdaftar',
        'keterangan',
        'kabupaten',
        'provinsi',



        
    ];


}
