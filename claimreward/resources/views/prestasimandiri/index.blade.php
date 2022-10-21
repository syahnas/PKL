@extends('layout.mastercode')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Rekapitulasi</h1>
      </div>
    </div>
  </div>
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-15">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Rekapitulasi Mahasiswa Berprestasi Universitas Muhammadiyah Banjarmasin</h3>
          </div>
          <div class="card-body">
            <a href="/validasi/cetak" class="btn btn-success">Cetak Laporan</a>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr data-wigdet="expandable-table">
                  <th>No</th>
                  <th>Id Transaksi</th>
                  <th>NPM</th>
                  <th>Nama Mahasiswa</th>
                  <th>Nama Kompetisi</th>
                  <th>Nama Penyelenggara</th>
                  <th>Detail</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pmandiri as $e=>$p)
                <tr>
                  <td>{{$e+1}}</td>
                  <td>{{$p->id}}</td>
                  <td>{{$p->npm}}</td>
                  <td>{{$p->nm_mhsw}}</td>
                  <td>{{$p->nm_kompetisi}}</td>
                  <td>{{$p->nm_penyelenggara}}</td>
                  <td><a href="/validasi/{{$p -> id}}/show">Cek Detail</a></td>
                  <td>@if($p->status==0)Pending
                    @elseif ($p->status==1)Disetujui
                    @elseif ($p->status==2)Ditolak
                    @endif</td>
                  <td>@if($p->status==0)
                    <a href="/pmandiri/{{$p->id}}/setuju" class="btn btn-success">Setuju</a>
                    <a href="/pmandiri/{{$p->id}}/tolak" class="btn btn-danger">Tolak</a>
                @endif</td>
                 </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          </div>
        </div>
</section>
@endsection