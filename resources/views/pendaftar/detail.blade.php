@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Pendaftar
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>NISN: </b>{{$pendaftar->nisn}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$pendaftar->nama_lengap}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('dashboard.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection