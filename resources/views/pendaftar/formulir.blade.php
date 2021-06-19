@extends('adminlte::page')

@section('title', 'Formulir || PPDB SMKN 5 Kab. Tangerang')


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulir Pendaftaran</h1>
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
                <form action="pendaftar/daftar" method="POST">
                @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input required name="nama_lengap" type="text" class="form-control" placeholder="Nama Lengkap" value="{{ $user->name }}" disabled>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>NISN</label>
                        <input required name="nisn" type="number" class="form-control" placeholder="NISN" value="{{ $user->nisn }}" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select required name="jenis_kelamin"  class="form-control">
                          <option value="">==== Pilih Jenis Kelamin ====</option>
                          <option>Laki-laki</option>
                          <option>Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>NIK</label>
                        <input required name="nik" type="number" class="form-control" placeholder="Nomor Induk Kependudukan">
                      </div>
                    </div>
                  <div class="col-sm-6">
                  <!-- input states -->
                  <div class="form-group">
                        <label>No. KK</label>
                        <input required name="no_kk" type="number" class="form-control" placeholder="Nomor Kartu Keluarga">
                      </div>
                  </div>
                  <div class="col-sm-6">
                  <!-- input states -->
                  <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input required name="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir">
                      </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input required name="tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>No Registasi Akta Lahir</label>
                        <input required name="noreg_akta" type="text" class="form-control" placeholder="No Registasi Akta Lahir">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Agama</label>
                        <select required name="agama" class="form-control">
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
                        <input required name="alamat" type="text" class="form-control" placeholder="Alamat">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                        <label>Rt</label>
                        <input required name="rt" type="text" class="form-control" placeholder="Rt">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                        <label>Rw</label>
                        <input required name="rw" type="text" class="form-control" placeholder="Rw">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Desa/Kelurahan</label>
                        <input required name="desa" type="text" class="form-control" placeholder="Desa/Kelurahan">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input required name="kecamatan" type="text" class="form-control" placeholder="Kecamatan">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kabupaten</label>
                        <input required name="kabupaten" type="text" class="form-control" placeholder="Kabupaten">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Provinsi</label>
                        <input required name="provinsi" type="text" class="form-control" placeholder="Provinsi">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tempat Tinggal</label>
                        <select required name="tempat_tinggal" class="form-control">
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
                        <input required name="anakke" type="number" class="form-control" placeholder="Anak Keberapa">
                    </div>
                  </div>
                  <div id="nokip" class="col-sm-6">
                    <div class="form-group">
                        <label>No. KIP</label>
                        <input name="kip" type="text" class="form-control" placeholder="No. KIP">
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
                        <input required name="ayahnama" type="text" class="form-control" placeholder="Nama ayah Kandung">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>NIK Ayah</label>
                        <input required name="ayahnik" type="number" class="form-control" placeholder="NIK Ayah">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tahun Lahir</label>
                        <input required name="ayahtahun" type="number" class="form-control" placeholder="Tahun Lahir">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pendidikan</label>
                        <select required name="ayahpendidikan" class="form-control">
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
                        <select required name="ayahpekerjaan" class="form-control">
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
                        <select required name="ayahpenghasilan" class="form-control">
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
                        <input required name="ibunama" type="text" class="form-control" placeholder="Nama Ibu Kandung">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>NIK Ibu</label>
                        <input required name="ibunik" type="number" class="form-control" placeholder="NIK Ibu">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tahun Lahir</label>
                        <input required name="ibutahun" type="number" class="form-control" placeholder="Tahun Lahir">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pendidikan</label>
                        <select required name="ibupendidikan" class="form-control">
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
                        <select required name="ibupekerjaan" class="form-control">
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
                        <select required name="ibupenghasilan" class="form-control">
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
                        <input name="walinama" type="text" class="form-control" placeholder="Nama Wali">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>NIK Wali</label>
                        <input name="walinik" type="number" class="form-control" placeholder="NIK Wali">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tahun Lahir</label>
                        <input name="walitahun" type="number" class="form-control" placeholder="Tahun Lahir">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pendidikan</label>
                        <select required name="walipendidikan" class="form-control">
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
                        <select required name="walipekerjaan" class="form-control">
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
                        <select required name="walipenghasilan" class="form-control">
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
                        <input required name="sekolahasal" type="text" class="form-control" placeholder="Nama Sekolah Asal SMP/MTs" value="{{ $user->sekolahasal }}" disabled>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pilihan Jurusan 1</label>
                        <select required class="form-control" id="jurusan1-option" name="jurusan1">
                        <option value="">==== Pilih Jurusan Pilihan 1 ====</option>
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
                        <select required class="form-control" id="jurusan2-option" name="jurusan2">
                        <option value="">==== Pilih Jurusan Pilihan 2 ====</option>
                        @foreach ($jurusans as $jurusan)
                            <option value="{{ $jurusan->id }}">{{ $jurusan->namajurusan }}</option>
                        @endforeach
                      </select>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">Nilai Pengetahuan Semester 1</h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Indonesia</label>
                        <input required name="s1indonesia" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Indonesia">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Inggris</label>
                        <input required name="s1inggris" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Inggris">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Matematika</label>
                        <input required name="s1matematika" type="number" step="0.01" class="form-control" placeholder="Nilai Matematika">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai IPA</label>
                        <input required name="s1ipa" type="number" step="0.01" class="form-control" placeholder="Nilai IPA">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">Nilai Pengetahuan Semester 2</h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Indonesia</label>
                        <input required name="s2indonesia" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Indonesia">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Inggris</label>
                        <input required name="s2inggris" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Inggris">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Matematika</label>
                        <input required name="s2matematika" type="number" step="0.01" class="form-control" placeholder="Nilai Matematika">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai IPA</label>
                        <input required name="s2ipa" type="number" step="0.01" class="form-control" placeholder="Nilai IPA">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">Nilai Pengetahuan Semester 3</h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Indonesia</label>
                        <input required name="s3indonesia" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Indonesia">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Inggris</label>
                        <input required name="s3inggris" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Inggris">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Matematika</label>
                        <input required name="s3matematika" type="number" step="0.01" class="form-control" placeholder="Nilai Matematika">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai IPA</label>
                        <input required name="s3ipa" type="number" step="0.01" class="form-control" placeholder="Nilai IPA">
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
                        <input required name="s4indonesia" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Indonesia">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Inggris</label>
                        <input required name="s4inggris" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Inggris">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Matematika</label>
                        <input required name="s4matematika" type="number" step="0.01" class="form-control" placeholder="Nilai Matematika">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai IPA</label>
                        <input required name="s4ipa" type="number" step="0.01" class="form-control" placeholder="Nilai IPA">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">Nilai Pengetahuan Semester 5</h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Indonesia</label>
                        <input required name="s5indonesia" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Indonesia">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Bahasa Inggris</label>
                        <input required name="s5inggris" type="number" step="0.01" class="form-control" placeholder="Nilai Bahasa Inggris">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai Matematika</label>
                        <input required name="s5matematika" type="number" step="0.01" class="form-control" placeholder="Nilai Matematika">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nilai IPA</label>
                        <input required name="s5ipa" type="number" step="0.01" class="form-control" placeholder="Nilai IPA">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin ingin menyimpan?')">Simpan</button>
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
    <!--link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}"-->
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script-->
@stop

@section('js')
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<!--script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script-->
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<!--script src="../../dist/js/adminlte.min.js"></script-->
<!-- AdminLTE for demo purposes -->
<!--script src="../../dist/js/demo.js"></script-->
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@stop