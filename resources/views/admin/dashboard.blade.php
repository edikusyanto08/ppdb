@extends('adminlte::page')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  /-->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endsection
@section('title', 'Beranda')

@section('content_header')
    <h1>Data Peserta Terdaftar</h1>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- =========================================================== -->
        <div class="row">
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box shadow-lg">
              <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Terdaftar</span>
                <span class="info-box-number">{{$counterdaftar}} Peserta</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box shadow-lg">
              <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Pendaftar</span>
                <span class="info-box-number">{{$counpendaftar}} Peserta</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Terdaftar</h3>
                        </div>    
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="datatable">
                                <thead>
                                <tr>
                                    <th> NISN </th>
                                    <th> Nama </th>
                                    <th> Tempat, Tanggal Lahir </th>
                                    <th> Jurusan </th>
                                    <th> Verifikasi </th>
                                    <!--th> Pilihan 2 </th-->
                                    <th> Status </th>
                                    <th> Aksi </th>

                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pendaftar as $siswa)
                                    <?php 
                                        $jurusan2 = $siswa->jurusan2;
                                        $jurusan1 = $siswa->jurusan1;
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
                                    <tr>
                                        <td>{{ $siswa->nisn }}</td>
                                        <td>{{ $siswa->nama_lengap }}</td>
                                        <td>{{ $siswa->tempat_lahir }}, {{ $siswa->tgl_lahir }}</td>
                                        <td>{{ $jurusan1 }}</td>
                                        <td><a class="btn btn-info" href="{{ route('dashboard.show',$siswa->id) }}">Verifikasi</a></td>
                                        <!--td>{{ $jurusan2 }}</td-->
                                        <td>
                                        <input data-id="{{$siswa->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $siswa->status ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            <form action="{{ route('dashboard.destroy',$siswa->id) }}" method="POST">
                            
                                                <a class="btn btn-info" href="{{ route('dashboard.show',$siswa->id) }}">Lihat</a>
                                
                                                <a class="btn btn-primary" href="{{ route('dashboard.edit',$siswa->id) }}">Ubah</a>
                                                <!--button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#vertically-centered">
                                                    Vertically centered
                                                </button-->
                            
                                                @csrf
                                                @method('DELETE')
                                
                                                <!--button type="submit" class="btn btn-danger">Hapus</button-->
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
@stop

@section('css')
    <!--link rel="stylesheet" href="/css/admin_custom.css"-->

@stop

@section('js')
<!-- DataTables -->
<script src="{{url('plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script> 
    $ ( function () {
        $('#datatable').DataTable();
    })
</script>
<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var siswa_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeStatus',
            data: {'status': status, 'siswa_id': siswa_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>
@endsection