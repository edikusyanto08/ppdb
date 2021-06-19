@extends('adminlte::page')

@section('title', 'Formulir || PPDB SMKN 5 Kab. Tangerang')


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulir Ubah Data {{ $pendaftar->nama_lengap }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">Formulir</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Diri </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('dashboard.update', $pendaftar->id) }}" method="POST" id="myForm">
                @csrf
                @method('PUT')
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input required name="nama_lengap" type="text" class="form-control" placeholder="Nama Lengkap" value="{{ $pendaftar->nama_lengap }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>NISN</label>
                        <input required name="nisn" type="number" class="form-control" placeholder="NISN" value="{{ $pendaftar->nisn }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin"  class="form-control" value="{{ $pendaftar->jenis_kelamin }}">
                            <option value="{{ $pendaftar->jenis_kelamin }}">{{ $pendaftar->jenis_kelamin }}</option>
                          <option value="">==== Pilih Jenis Kelamin ====</option>
                          <option>Laki-laki</option>
                          <option>Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>NIK</label>
                        <input required name="nik" type="number" class="form-control" placeholder="Nomor Induk Kependudukan" value="{{ $pendaftar->nik }}">
                      </div>
                    </div>
                  <div class="col-sm-6">
                  <!-- input states -->
                  <div class="form-group">
                        <label>No. KK</label>
                        <input required name="no_kk" type="number" class="form-control" placeholder="Nomor Kartu Keluarga" value="{{ $pendaftar->no_kk }}">
                      </div>
                  </div>
                  <div class="col-sm-6">
                  <!-- input states -->
                  <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input required name="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir" value="{{ $pendaftar->tempat_lahir }}">
                      </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input required name="tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir" value="{{ $pendaftar->tgl_lahir }}">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>No Registasi Akta Lahir</label>
                        <input required name="noreg_akta" type="text" class="form-control" placeholder="No Registasi Akta Lahir" value="{{ $pendaftar->noreg_akta }}">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Agama</label>
                        <select name="agama" class="form-control" value="{{ $pendaftar->agama }}">
                        <option value="{{ $pendaftar->agama }}">{{ $pendaftar->agama }}</option>
                          <option value="">==== Pilih Agama ====</option>
                          <option>Islam</option>
                          <option>Kristen</option>
                          <option>Katholik</option>
                          <option>Hindu</option>
                          <option>Buddha</option>
                          <option>Kong Hu Chu</option>
                          <option>Kepercayaan kpd Tuhan YME</option>
                          <option>Lainnya</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Alamat</label>
                        <input required name="alamat" type="text" class="form-control" placeholder="Alamat" value="{{ $pendaftar->alamat }}">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                        <label>Rt</label>
                        <input required name="rt" type="text" class="form-control" placeholder="Rt" value="{{ $pendaftar->rt }}">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                        <label>Rw</label>
                        <input required name="rw" type="text" class="form-control" placeholder="Rw" value="{{ $pendaftar->rw }}">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Desa/Kelurahan</label>
                        <input required name="desa" type="text" class="form-control" placeholder="Desa/Kelurahan" value="{{ $pendaftar->desa }}">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input required name="kecamatan" type="text" class="form-control" placeholder="Kecamatan" value="{{ $pendaftar->kecamatan }}">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kabupaten</label>
                        <input required name="kabupaten" type="text" class="form-control" placeholder="Kabupaten" value="{{ $pendaftar->kabupaten }}">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Provinsi</label>
                        <input required name="provinsi" type="text" class="form-control" placeholder="Provinsi" value="{{ $pendaftar->provinsi }}">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tempat Tinggal</label>
                        <select name="tempat_tinggal" class="form-control" value="{{ $pendaftar->tempat_tinggal }}">
                        <option value="{{ $pendaftar->tempat_tinggal }}">{{ $pendaftar->tempat_tinggal }}</option>
                          <option value="">==== Pilih Tempat Tinggal ====</option>
                          <option>Bersama orang tua</option>
                          <option>Wali</option>
                          <option>Kos</option>
                          <option>Asrama</option>
                          <option>Panti Asuhan</option>
                        </select>

                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Anak Keberapa</label>
                        <input required name="anakke" type="number" class="form-control" placeholder="Anak Keberapa" value="{{ $pendaftar->anakke }}">
                    </div>
                  </div>
                  <div id="nokip" class="col-sm-6">
                    <div class="form-group">
                        <label>No. KIP</label>
                        <input name="kip" type="text" class="form-control" placeholder="No. KIP" value="{{ $pendaftar->kip }}">
                    </div>
                  </div>
                </div>
              </div>
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Data Ayah</h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama ayah Kandung</label>
                        <input required name="ayahnama" type="text" class="form-control" placeholder="Nama ayah Kandung" value="{{ $pendaftar->ayahnama }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>NIK Ayah</label>
                        <input required name="ayahnik" type="number" class="form-control" placeholder="NIK Ayah" value="{{ $pendaftar->ayahnik }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tahun Lahir</label>
                        <input required name="ayahtahun" type="number" class="form-control" placeholder="Tahun Lahir" value="{{ $pendaftar->ayahtahun }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pendidikan</label>
                        <select name="ayahpendidikan" class="form-control" value="{{ $pendaftar->ayahpendidikan }}">
                        <option value="{{ $pendaftar->ayahpendidikan }}">{{ $pendaftar->ayahpendidikan }}</option>
                          <option value="">==== Pilih Jenjang Pendidikan ====</option>
                          <option>PAUD</option>
                          <option>TK / SEDERAJAT</option>
                          <option>PUTUS SD</option>
                          <option>SD / SEDERAJAT</option>
                          <option>SMP / SEDERAJAT</option>
                          <option>SMA / SEDERAJAT</option>
                          <option>PAKET A</option>
                          <option>PAKET B</option>
                          <option>PAKET C</option>
                          <option>D1</option>
                          <option>D2</option>
                          <option>D3</option>
                          <option>D4</option>
                          <option>S1</option>
                          <option>S2</option>
                          <option>S3</option>
                          <option>TIDAK SEKOLAH</option>
                          <option>LAINNYA</option>
                        </select>
                        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pekerjaan</label>
                        <select name="ayahpekerjaan" class="form-control" value="{{ $pendaftar->ayahpekerjaan }}">
                        <option value="{{ $pendaftar->ayahpekerjaan }}">{{ $pendaftar->ayahpekerjaan }}</option>
                          <option value="">==== Pilih Pekerjaan ====</option>
                          <option>TIDAK BEKERJA</option>
                          <option>SUDAH MENINGGAL</option>
                          <option>NELAYAN</option>
                          <option>PETANI</option>
                          <option>PETERNAK</option>
                          <option>PNS/TNI/POLRI</option>
                          <option>KARYAWAN SWASTA</option>
                          <option>PEDAGANG KECIL</option>
                          <option>PEDAGANG BESAR</option>
                          <option>WIRASWASTA</option>
                          <option>WIRAUSAHA</option>
                          <option>BURUH</option>
                          <option>PENSIUNAN</option>
                          <option>TENAGA KERJA INDONESIA</option>
                          <option>LAINNYA</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Penghasilan bulanan</label>
                        <select name="ayahpenghasilan" class="form-control" value="{{ $pendaftar->ayahpenghasilan }}">
                        <option value="{{ $pendaftar->ayahpenghasilan }}">{{ $pendaftar->ayahpenghasilan }}</option>
                          <option value="">==== Pilih Penghasilan ====</option>
                          <option>< Rp. 500.000</option>
                          <option>Rp. 500.000-Rp. 999.999</option>
                          <option>Rp. 1.000.000-Rp. 1.999.999</option>
                          <option>Rp. 2.000.000-Rp. 4.999.999</option>
                          <option>Rp. 5.000.000-Rp. 20.000.000</option>
                          <option>> Rp. 20.000.000</option>
                          <option>Tidak Berpenghasilan</option>
                        </select>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Data Ibu</h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Ibu Kandung</label>
                        <input required name="ibunama" type="text" class="form-control" placeholder="Nama Ibu Kandung" value="{{ $pendaftar->ibunama }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>NIK Ibu</label>
                        <input required name="ibunik" type="number" class="form-control" placeholder="NIK Ibu" value="{{ $pendaftar->ibunik }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tahun Lahir</label>
                        <input required name="ibutahun" type="number" class="form-control" placeholder="Tahun Lahir" value="{{ $pendaftar->ibutahun }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pendidikan</label>
                        <select name="ibupendidikan" class="form-control" value="{{ $pendaftar->ibupendidikan }}">
                        <option value="{{ $pendaftar->ibupendidikan }}">{{ $pendaftar->ibupendidikan }}</option>
                          <option value="">==== Pilih Jenjang Pendidikan ====</option>
                          <option>PAUD</option>
                          <option>TK / SEDERAJAT</option>
                          <option>PUTUS SD</option>
                          <option>SD / SEDERAJAT</option>
                          <option>SMP / SEDERAJAT</option>
                          <option>SMA / SEDERAJAT</option>
                          <option>PAKET A</option>
                          <option>PAKET B</option>
                          <option>PAKET C</option>
                          <option>D1</option>
                          <option>D2</option>
                          <option>D3</option>
                          <option>D4</option>
                          <option>S1</option>
                          <option>S2</option>
                          <option>S3</option>
                          <option>TIDAK SEKOLAH</option>
                          <option>LAINNYA</option>
                        </select>

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pekerjaan</label>
                        <select name="ibupekerjaan" class="form-control" value="{{ $pendaftar->ibupekerjaan }}">
                        <option value="{{ $pendaftar->ibupekerjaan }}">{{ $pendaftar->ibupekerjaan }}</option>
                          <option value="">==== Pilih Pekerjaan ====</option>
                          <option>TIDAK BEKERJA</option>
                          <option>SUDAH MENINGGAL</option>
                          <option>NELAYAN</option>
                          <option>PETANI</option>
                          <option>PETERNAK</option>
                          <option>PNS/TNI/POLRI</option>
                          <option>KARYAWAN SWASTA</option>
                          <option>PEDAGANG KECIL</option>
                          <option>PEDAGANG BESAR</option>
                          <option>WIRASWASTA</option>
                          <option>WIRAUSAHA</option>
                          <option>BURUH</option>
                          <option>PENSIUNAN</option>
                          <option>TENAGA KERJA INDONESIA</option>
                          <option>LAINNYA</option>
                        </select>

                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Penghasilan bulanan</label>
                        <select name="ibupenghasilan" class="form-control" value="{{ $pendaftar->ibupenghasilan }}">
                        <option value="{{ $pendaftar->ibupenghasilan }}">{{ $pendaftar->ibupenghasilan }}</option>
                          <option value="">==== Pilih Penghasilan ====</option>
                          <option>< Rp. 500.000</option>
                          <option>Rp. 500.000-Rp. 999.999</option>
                          <option>Rp. 1.000.000-Rp. 1.999.999</option>
                          <option>Rp. 2.000.000-Rp. 4.999.999</option>
                          <option>Rp. 5.000.000-Rp. 20.000.000</option>
                          <option>> Rp. 20.000.000</option>
                          <option>Tidak Berpenghasilan</option>
                        </select>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Data Wali</h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Wali</label>
                        <input name="walinama" type="text" class="form-control" placeholder="Nama Wali" value="{{ $pendaftar->walinama }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>NIK Wali</label>
                        <input name="walinik" type="number" class="form-control" placeholder="NIK Wali" value="{{ $pendaftar->walinik }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tahun Lahir</label>
                        <input name="walitahun" type="number" class="form-control" placeholder="Tahun Lahir" value="{{ $pendaftar->walitahun }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pendidikan</label>
                        <select name="walipendidikan" class="form-control" value="{{ $pendaftar->walipendidikan }}">
                        <option value="{{ $pendaftar->walipendidikan }}">{{ $pendaftar->walipendidikan }}</option>
                          <option value="">==== Pilih Jenjang Pendidikan ====</option>
                          <option>PAUD</option>
                          <option>TK / SEDERAJAT</option>
                          <option>PUTUS SD</option>
                          <option>SD / SEDERAJAT</option>
                          <option>SMP / SEDERAJAT</option>
                          <option>SMA / SEDERAJAT</option>
                          <option>PAKET A</option>
                          <option>PAKET B</option>
                          <option>PAKET C</option>
                          <option>D1</option>
                          <option>D2</option>
                          <option>D3</option>
                          <option>D4</option>
                          <option>S1</option>
                          <option>S2</option>
                          <option>S3</option>
                          <option>TIDAK SEKOLAH</option>
                          <option>LAINNYA</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pekerjaan</label>
                        <select name="walipekerjaan" class="form-control" value="{{ $pendaftar->walipekerjaan }}">
                        <option value="{{ $pendaftar->walipekerjaan }}">{{ $pendaftar->walipekerjaan }}</option>
                          <option value="0">==== Pilih Pekerjaan ====</option>
                          <option>TIDAK BEKERJA</option>
                          <option>SUDAH MENINGGAL</option>
                          <option>NELAYAN</option>
                          <option>PETANI</option>
                          <option>PETERNAK</option>
                          <option>PNS/TNI/POLRI</option>
                          <option>KARYAWAN SWASTA</option>
                          <option>PEDAGANG KECIL</option>
                          <option>PEDAGANG BESAR</option>
                          <option>WIRASWASTA</option>
                          <option>WIRAUSAHA</option>
                          <option>BURUH</option>
                          <option>PENSIUNAN</option>
                          <option>TENAGA KERJA INDONESIA</option>
                          <option>LAINNYA</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Penghasilan bulanan</label>
                        <select name="walipenghasilan" class="form-control" value="{{ $pendaftar->walipenghasilan }}">
                        <option value="{{ $pendaftar->walipenghasilan }}">{{ $pendaftar->walipenghasilan }}</option>
                          <option value="0">==== Pilih Penghasilan ====</option>
                          <option>< Rp. 500.000</option>
                          <option>Rp. 500.000-Rp. 999.999</option>
                          <option>Rp. 1.000.000-Rp. 1.999.999</option>
                          <option>Rp. 2.000.000-Rp. 4.999.999</option>
                          <option>Rp. 5.000.000-Rp. 20.000.000</option>
                          <option>> Rp. 20.000.000</option>
                          <option>Tidak Berpenghasilan</option>
                        </select>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="card card-warning">
                  <div class="card-header">
                    <h3 class="card-title">Registrasi Peserta Didik</h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Sekolah SMP/MTs</label>
                        <input required name="sekolahasal" type="text" class="form-control" placeholder="Nama Sekolah Asal SMP/MTs" value="{{ $pendaftar->sekolahasal }}">
                      </div>
                    </div>
                    
                    <?php 
                                        $jurusan2 = $pendaftar->jurusan2;
                                        $jurusan1 = $pendaftar->jurusan1;
                                        if($jurusan1 == 1){
                                            $jurusan1 = "Teknik Pemesinan";
                                        } elseif($jurusan1 == 2){
                                            $jurusan1 = "Teknik Kendaraan Ringan Otomotif";
                                        } elseif($jurusan1 == 3){
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
                                        if($jurusan2 == 1){
                                            $jurusan2 = "Teknik Pemesinan";
                                        } elseif($jurusan2 == 2){
                                            $jurusan2 = "Teknik Kendaraan Ringan Otomotif";
                                        } elseif($jurusan2 == 3){
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
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pilihan Jurusan 1</label>
                        <select class="form-control" id="jurusan1-option" name="jurusan1" value="{{ $pendaftar->jurusan1 }}">
                        <option value="{{ $jurusan1 }}">{{ $jurusan1 }}</option>
                        <option value="0">==== Pilih Jurusan Pilihan 1 ====</option>
                        @foreach ($jurusans as $jurusan)
                            <option value="{{ $jurusan->id }}">{{ $jurusan->namajurusan }}</option>
                            @endforeach
                      </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pilihan Jurusan 2</label>
                        <select class="form-control" id="jurusan2-option" name="jurusan2" value="{{ $pendaftar->jurusan2 }}">
                        <option value="{{ $jurusan2 }}">{{ $jurusan2 }}</option>
                        <option value="0">==== Pilih Jurusan Pilihan 2 ====</option>
                        @foreach ($jurusans as $jurusan)
                            <option value="{{ $jurusan->id }}">{{ $jurusan->namajurusan }}</option>
                      @endforeach
                        
                      </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>No. Hp.</label>
                        <input required name="nohp" type="number" class="form-control" placeholder="Nomor WhatsApp" value="{{ $pendaftar->nohp }}">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">Nilai Semester 1</h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Indonesia</label>
                        <input required name="s1indonesia" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Indonesia" value="{{ $pendaftar->s1indonesia }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Inggris</label>
                        <input required name="s1inggris" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Inggris" value="{{ $pendaftar->s1inggris }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Matematika</label>
                        <input required name="s1matematika" type="number" step="0.01" class="form-control" placeholder="Nilai Matematika" value="{{ $pendaftar->s1matematika }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai IPA</label>
                        <input required name="s1ipa" type="number" step="0.01" class="form-control" placeholder="Nilai IPA" value="{{ $pendaftar->s1ipa }}">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">Nilai Semester 2</h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Indonesia</label>
                        <input required name="s2indonesia" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Indonesia" value="{{ $pendaftar->s2indonesia }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Inggris</label>
                        <input required name="s2inggris" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Inggris" value="{{ $pendaftar->s2inggris }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Matematika</label>
                        <input required name="s2matematika" type="number" step="0.01" class="form-control" placeholder="Nilai Matematika" value="{{ $pendaftar->s2matematika }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai IPA</label>
                        <input required name="s2ipa" type="number" step="0.01" class="form-control" placeholder="Nilai IPA" value="{{ $pendaftar->s2ipa }}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">Nilai Semester 3</h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Indonesia</label>
                        <input required name="s3indonesia" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Indonesia" value="{{ $pendaftar->s3indonesia }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Inggris</label>
                        <input required name="s3inggris" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Inggris" value="{{ $pendaftar->s3inggris }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Matematika</label>
                        <input required name="s3matematika" type="number" step="0.01" class="form-control" placeholder="Nilai Matematika" value="{{ $pendaftar->s3matematika }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai IPA</label>
                        <input required name="s3ipa" type="number" step="0.01" class="form-control" placeholder="Nilai IPA" value="{{ $pendaftar->s3ipa }}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">Nilai Semester 4</h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Indonesia</label>
                        <input required name="s4indonesia" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Indonesia" value="{{ $pendaftar->s4indonesia }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Inggris</label>
                        <input required name="s4inggris" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Inggris" value="{{ $pendaftar->s4inggris }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Matematika</label>
                        <input required name="s4matematika" type="number" step="0.01" class="form-control" placeholder="Nilai Matematika" value="{{ $pendaftar->s4matematika }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai IPA</label>
                        <input required name="s4ipa" type="number" step="0.01" class="form-control" placeholder="Nilai IPA" value="{{ $pendaftar->s4ipa }}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">Nilai Semester 5</h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Indonesia</label>
                        <input required name="s5indonesia" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Indonesia" value="{{ $pendaftar->s5indonesia }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Inggris</label>
                        <input required name="s5inggris" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Inggris" value="{{ $pendaftar->s5inggris }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Matematika</label>
                        <input required name="s5matematika" type="number" step="0.01" class="form-control" placeholder="Nilai Matematika" value="{{ $pendaftar->s5matematika }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai IPA</label>
                        <input required name="s5ipa" type="number" step="0.01" class="form-control" placeholder="Nilai IPA" value="{{ $pendaftar->s5ipa }}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin ingin menyimpan?')">Simpan</button> || 
                  <button type="submit" class="btn btn-primary" onclick="redirec('/dashboard');">Batal</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  @stop
  
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@stop