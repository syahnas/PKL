@extends('layout.mastercode')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Mahasiswa Fakultas Teknik</h1>
      </div>
    </div>
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-15">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Mahasiswa</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr data-wigdet="expandable-table">
                  <th>NPM</th>
                  <th>NAMA MAHASISWA</th>
                  <th>PROGRAM STUDI</th>
                  <th>JENIS KELAMIN</th>
                  <th>AGAMA</th>
                  <th>TEMPAT LAHIR</th>
                  <th>TANGGAL LAHIR</th>
                  <th>STATUS</th>
                  <th>NOMOR HANDPHONE</th>
                  <th>DOSEN PEMBIMBING</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $d)
                <tr>
                  <td>{{$d->npm}}</td>
                  <td>{{$d->nama}}</td>
                  <td>{{$d->prodi}}</td>
                  <td>{{$d->gender}}</td>
                  <td>{{$d->agama}}</td>
                  <td>{{$d->tempat}}</td>
                  <td>{{$d->ttl}}</td>
                  <td>{{$d->status}}</td>
                  <td>{{$d->nohp}}</td>
                  <td>{{$d->dosenPA}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
@endsection