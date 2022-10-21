@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Validasi Formulir Pengajuan Claim Reward</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered table-stripped">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Id Transaksi</th>
                  <th>NPM</th>
                  <th>Nama Mahasiswa</th>
                  <th>Status</th>
                  <th>Detail</th>
                  <th>Action</th>
                </tr>
              </thead>
              <body>
                @foreach ($validasi as $e=>$v)
                <tr>
                    <td>{{$e+1}}</td>
                    <td>{{$v->id}}</td>
                    <td>{{$v->npm}}</td>
                    <td>{{$v->nm_mhsw}}</td>
                    <td>@if($v->status==0)Pending
                    @elseif ($v->status==1)Disetujui
                    @elseif ($v->status==2)Ditolak
                    @endif</td>
                    <td><a href="/validasi/{{$v -> id}}/show">Cek Detail</a></td>
                    <td>@if($v->status==0)
                        <a href="/validasi/{{$v->id}}/setuju" class="btn btn-success">Setuju</a>
                        <a href="/validasi/{{$v->id}}/tolak" class="btn btn-danger">Tolak</a>
                    @endif</td>
                </tr>
                @endforeach
              </body>
        </table>
      </div>
    </div>
  </section>
@endsection