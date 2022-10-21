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
            <h3 class="card-title">Rekapitulasi Data Mahasiswa Berprestasi</h3>
          </div>
          <div class="card-body">
            <a href="/validasi/cetak" class="btn btn-success">Cetak Laporan</a>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr data-wigdet="expandable-table">
                  <th>No</th>
                  <th>Id Pengajuan</th>
                  <th>NPM</th>
                  <th>Nama Mahasiswa</th>
                  <th>Nama Kompetisi</th>
                  <th>Nama Penyelenggara</th>
                  <th>Bidang Prestasi</th>
                  <th>Capaian</th>
                  <th>Tingkat Prestasi</th>
                  <th>Tanggal Kegiatan</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($validasi as $e=>$r)
                <tr>
                  <td>{{$e+1}}</td>
                  <td>{{$r->id}}</td>
                  <td>{{$r->npm}}</td>
                  <td>{{$r->nm_mhsw}}</td>
                  <td>{{$r->nm_kompetisi}}</td>
                  <td>{{$r->nm_penyelenggara}}</td>
                  <td>{{$r->bidang}}</td>
                  <td>{{$r->capaian}}</td>
                  <td>{{$r->tingkat}}</td>
                  <td>{{$r->tgl}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
</section>
@endsection