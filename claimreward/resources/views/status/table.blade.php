@extends('layout.mastercode')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Status Claim Reward</h1>
      </div>
    </div>
</section>
<section class="content">
  <div class="card">
    <div class="card-header">
      <h1 class="card-title">Status Claim Rewards</h1>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Id Transaksi</th>
            <th>NPM</th>
            <th>Nama Mahasiswa</th>
            <th>Status</th>
          </tr>
        </thead>
        <body>     
          @foreach ($status as $e=>$s)
          <tr>
          <td>{{$e+1}}</td>
          <td>{{$s->id}}</td>
          <td>{{$s->npm}}</td>
          <td>{{$s->nm_mhsw}}</td>
          <td>@if($s->status==0)Pending
            @elseif ($s->status==1)Disetujui
            @elseif ($s->status==2)Ditolak
            @endif</td>
        </tr>
        @endforeach
        </body>
      </table>
    </div>
  </div>
</section>
@endsection