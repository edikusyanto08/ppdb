<?php

		//$s = $this->pengumuman_kelulusan->get($no_pes);
?>
<style type="text/css">
	.frame		{ margin-left: 10px; margin-right: 1px; font-family:"Times New Roman";padding-top:-70px}
	.judul		{ text-align: center; font-family: "Times New Roman",Times,serif; font-size:12pt;}
	.kop1		{ text-align: center; font-family: "Times New Roman",Times,serif; font-size:17pt; margin:-3;padding-top:-14px; padding-left:10px}
	.kop2		{ text-align: center; font-family: "Times New Roman",Times,serif; font-size:13pt;padding-top:5px;padding-bottom:5px; padding-left:10px}
	.kop3		{ text-align: center; font-family:"Times New Roman",Times,serif; font-size:8pt; margin:1; padding-top:-14px; padding-left:10px}
	.isi1		{ text-align: justify; font-family: "Times New Roman",Times,serif; font-size:10pt; margin-left:25px}
	.isi2		{ text-align: justify; margin-left:25px;font-family: "Times New Roman",Times,serif;font-size:10pt; padding-top:-15px}
	.isi3		{ margin-left:25px; text-align: left; font-family:"Times New Roman",Times,serif; font-size:10pt;}
	.ttd		{ text-align: justify; margin-left:450px; font-family: "Times New Roman",Times,serif; font-size:11pt;padding-top:20px;}
	.garis		{ align: center; color: solid black; height: 0.5px; width: 700px;%; margin:0}
	.garis2		{ align: center; color: solid black; height: 1px; width: 700px;; margin:-1.3}
	.iso		{ position: relative; height:50px; width:95px; padding-top:1100px;}
	.pembungkus	{ position: absolute;}
	.banten		{ position: relative; height:100px; width:95px; padding-top:1px; padding-left: -2px}
	.n5			{ position: relative; height:100px; width:95px; padding-top:-5px; margin-left:620px }
	.stample			{ position: relative; height:150px; width:150px; padding-top:940px; margin-left:330px }
	.ttdstample			{ position: relative; height:70px; width:95px; padding-top:1000px; margin-left:450px }
	.TableNilai	{
		border-left:1px solid black;
		font-family: "Times New Roman",Times,serif;
		font-size:10pt;
	}
	.TableNilai td{
		border-bottom:1px solid black;
		border-right:1px solid black;

	}
	.TableNilai th{
		border-top:1px solid black;
		border-right:1px solid black;
		border-bottom:1px solid black;
	}

</style>
<!--div class="text-center" id="cover_utama"-->
<!-- Start Kop Surat -------------------->
<div class="pembungkus">
<img class="banten" src="images/banten2.png">
</div>
<div class="pembungkus">
<img class="n5" src="images/n5.png">
</div>



<div class="kop1"><b>PEMERINTAH PROVINSI BANTEN</div>
<div class="kop1"><b>DINAS PENDIDIKAN DAN KEBUDAYAAN</div>
<div class="kop2"><b>UNIT PELAKSANA TEKNIS</div>
<div class="kop1"><b>SMK NEGERI 5 KABUPATEN TANGERANG</div>
<div class="kop3">Jalan Ir. Sutami Km. 1,2 Kecamatan Mauk Kabupaten Tangerang Kode Pos 15530</div>
<div class="kop3">Website: www.smkn5kabtangerangmauk.sch.id Email: smkn5kabtangerang@gmail.com Telepon (021) 59330830</div>
<hr class="garis">
<hr class="garis2" top="-5">
<!-- End Kop Surat -------------------->

<!-- Start ISI SURAT --------------------->
<div align="right"> Rev.01<div>
<div class="frame">
<p class="judul" >
<u style="letter-spacing: 5px;"><strong>TANDA BUKTI<br></strong></u>
<strong>PENDAFTARAN PESERTA DIDIK BARU</strong><br>
<strong>TAHUN PELAJARAN 2021/2022</strong>
</p>
<div class="isi1" style="padding-top:-25px;" >
<p>
<table class="isi3">
<tbody>
<?php
$jurusan1 = $siswa->jurusan1;
$jurusan2 = $siswa->jurusan2;
if($jurusan1 == 1 ){
	$jurusan1 = "Teknik Pemesinan";
} elseif($jurusan1 == 2 ){
	$jurusan1 = "Teknik Kendaraan Ringan Otomotif";
} elseif($jurusan1 == 3 ){
	$jurusan1 = "Teknik dan Bisnis Sepeda Motor";
} elseif($jurusan1 == 4){
	$jurusan1 = "Teknik Komputer dan Jaringan";
} elseif($jurusan1 == 5){
	$jurusan1 = "Multimedia";
} elseif($jurusan1 == 6){
	$jurusan1 = "Rekayasa Prangkat Lunak";
} elseif($jurusan1 == 7){
	$jurusan1 = "Otomatisasi dan Tata Kelola Perkantoran";
} elseif($jurusan1 == 8){
	$jurusan1 = "Akuntansi dan Keuangan Lembaga";
} elseif($jurusan1 == 9){
	$jurusan1 = "Agribisnis Pengolahan Hasil Perikanan";
} elseif($jurusan1 == 10){
	$jurusan1 = "Perhotelan";
};
if($jurusan2 == 1 ){
	$jurusan2 = "Teknik Pemesinan";
} elseif($jurusan2 == 2 ){
	$jurusan2 = "Teknik Kendaraan Ringan Otomotif";
} elseif($jurusan2 == 3 ){
	$jurusan2 = "Teknik dan Bisnis Sepeda Motor";
} elseif($jurusan2 == 4){
	$jurusan2 = "Teknik Komputer dan Jaringan";
} elseif($jurusan2 == 5){
	$jurusan2 = "Multimedia";
} elseif($jurusan2 == 6){
	$jurusan2 = "Rekayasa Prangkat Lunak";
} elseif($jurusan2 == 7){
	$jurusan2 = "Otomatisasi dan Tata Kelola Perkantoran";
} elseif($jurusan2 == 8){
	$jurusan2 = "Akuntansi dan Keuangan Lembaga";
} elseif($jurusan2 == 9){
	$jurusan2 = "Agribisnis Pengolahan Hasil Perikanan";
} elseif($jurusan2 == 10){
	$jurusan2 = "Perhotelan";
};
?>
    <tr>
		<td align=left style="width:230px; height:15px ">NISN</td>
		<td>:</td>
    	<td style="width:400px; ">{{ $siswa->nisn }}</td>
	</tr>
	<tr>
		<td align=left style="width:230px; height:15px ">Nama</td>
		<td>:</td>
    	<td style="width:400px; ">{{ $siswa->nama_lengap }}</td>
	</tr>
	<tr>
		<td align=left style="width:230px; height:15px ">Tanggal Terdaftar</td>
		<td>:</td>
    	<td style="width:400px; ">{{ $siswa->created_at }}</td>
	</tr>
	<tr>
		<td align=left style="width:230px; height:15px ">Sekolah Asal</td>
		<td>:</td>
    	<td style="width:400px; ">{{ $siswa->sekolahasal }}</td>
	</tr>
	<tr>
		<td align=left style="width:230px; height:15px ">Pilihan Jurusan 1</td>
		<td>:</td>
    	<td style="width:400px; ">{{ $jurusan1 }}</td>
	</tr>
	<tr>
		<td align=left style="width:230px; height:15px ">Pilihan Jurusan 2</td>
		<td>:</td>
    	<td style="width:400px; ">{{ $jurusan2 }}</td>
	</tr>
</tbody>
</table>
	<?php
	$sesi1 = " Pukul 07.30 sampai 09.30 Wib.";
	$sesi2 = " Pukul 10.00 sampai 12.00 Wib.";
	$sesi3 = " Pukul 13.00 sampai 15.00 Wib.";
	$user_id = $siswa->id;
	if($user_id >=1 && $user_id <= 300){
		$tanggaltes = "21 Juni 2021";
	} elseif ($user_id >= 301 && $user_id <= 600){
		$tanggaltes = "22 Juni 2021";
	} elseif ($user_id >= 601 && $user_id <= 900){
		$tanggaltes = "23 Juni 2021";
	} elseif ($user_id >= 901 && $user_id <= 1200){
		$tanggaltes = "24 Juni 2021";
	} elseif ($user_id >= 1201 && $user_id <= 1500){
		$tanggaltes = "25 Juni 2021";
	} elseif ($user_id >= 1501 && $user_id <= 1600){
		$tanggaltes = "21 Juni 2021";
	} elseif ($user_id >= 1601 && $user_id <= 1700){
		$tanggaltes = "22 Juni 2021";
	} elseif ($user_id >= 1701 && $user_id <= 1800){
		$tanggaltes = "23 Juni 2021";
	} elseif ($user_id >= 1801 && $user_id <= 1900){
		$tanggaltes = "24 Juni 2021";
	} elseif ($user_id >= 1901){
		$tanggaltes = "25 Juni 2021";
	};
	$user_id = $siswa->id;
	//$sesi ="";
	if ($user_id >=1 && $user_id <= 100){
                $sesi = $sesi1;
            } elseif ($user_id >=101 && $user_id<= 200){
                $sesi = $sesi2;
            } elseif ($user_id >=201 && $user_id<= 300){
                $sesi = $sesi3;
            } elseif ($user_id >=301 && $user_id<= 400){
                $sesi = $sesi1;
            } elseif ($user_id >=401 && $user_id<= 500){
                $sesi = $sesi2;
            } elseif ($user_id >=501 && $user_id<= 600){
                $sesi = $sesi3;
            } elseif ($user_id >=601 && $user_id<= 700){
                $sesi = $sesi3;
            } elseif ($user_id >=701 && $user_id<= 800){
                $sesi = $sesi1;
            } elseif ($user_id >=801 && $user_id<= 900){
                $sesi = $sesi2;
            } elseif ($user_id >=901 && $user_id<=1000){
                $sesi = $sesi3;
            } elseif ($user_id >=1001 && $user_id<= 1100){
                $sesi = $sesi1;
            } elseif ($user_id >=1101 && $user_id<= 1200){
                $sesi = $sesi2;
            } elseif ($user_id >=1201 && $user_id<= 1300){
                $sesi = $sesi3;
            } elseif ($user_id >=1301 && $user_id<= 1400){
                $sesi = $sesi3;
            } elseif ($user_id >= 1401 && $user_id<= 1500){
                $sesi = $sesi1;
            } elseif ($user_id >= 1501 && $user_id<= 1600){
                $sesi = $sesi2;
            } elseif ($user_id >= 1601 && $user_id<= 1700){
                $sesi = $sesi3;
            } elseif ($user_id >= 1701 && $user_id<= 1800){
                $sesi = $sesi1;
            } elseif ($user_id >= 1801 && $user_id<= 1900){
                $sesi = $sesi2;
            } elseif ($user_id >= 1901 && $user_id<= 2000){
                $sesi = $sesi3;
            } elseif ($user_id >= 2001 && $user_id<= 2100){
                $sesi = $sesi1;
            } elseif ($user_id >= 2101 && $user_id<= 2200){
                $sesi = $sesi2;
            } elseif ($user_id >= 2201 && $user_id<= 2300){
                $sesi = $sesi3;
            } elseif ($user_id >= 2301){
                $sesi = "Mohon Maaf, Anda belum mendapatkan jadwal Sesi, Silakan hubungi panitia PPDB SMKN 5 Kabupaten Tangerang";
            };
	
		

	?>

<div class="strong">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Catatan: </div>
<!--table width="100%" border="1" style="margin-left:20px;"-->
<table width="90%" border="1" align="center">
  <tr>
    <td style="padding:10px 10px 60px 10px;">Jadwal Tes dan Verifikasi Berkas anda pada tanggal<b> {{ $tanggaltes }} {{ $sesi }}</b><br>
	Persyaratan yang harus dibawa:<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Asli Surat Keterangan Lulus (SKL)<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Fotokopi Akta Kelahiran<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Fotokopi KTP Orang Tua<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Fotokopi Kartu Keluarga<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. Fotokopi Rapor Semester 1 ??? 5 (Dilegalisasi)<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6. Sertifikat/Piagam Prestasi Non Akademik (Jika Ada)<br>
	<b>Wajib mematuhi Protokol Kesehatan Covid-19</b>
	</td>
  </tr>
</table>
</div>
<div class="ttd">
<table cellspacing="-5">
<tr>
<td valign=bottom >Tangerang, <?php echo date('d')," Juni ",date('Y');?><td>
</tr>
<tr>
<td valign=top>Panitia PPDB,<td>
</tr>
<tr><td style="height:60px;"></td></tr>
<tr>
<td valign=bottom><strong>....................................</strong></td>
</tr>
<tr>
<td valign=top>....................................</td>
</tr>
</table>
</div>