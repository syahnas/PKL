@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row-mb-2">
        <div class="col-sm-6">
          <h1>Claim Reward</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h1 class="card-title">Formulir Pendaftaran Claim Reward</h1>
      </div>
      <div class="card-body">
        <form action="/pmandiri/store" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Id Transaksi</label>
            <input class="form-control" id="id" name="id" value="{{$validasi->id}}" disabled>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">NPM</label>
            <input class="form-control" id="npm" placeholder="Masukan NPM" name="npm" value="{{$validasi->npm}}" disabled>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nm_mhsw" placeholder="Masukan Nama" name="nm_mhsw" value="{{$validasi->nm_mhsw}}" disabled>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Kompetisi</label>
            <input type="text" class="form-control" id="nm_kompetisi" placeholder="Nama Kompetisi"
              name="nm_kompetisi" value="{{$validasi->nm_kompetisi}}" disabled>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Penyelenggara</label>
            <input type="text" class="form-control" id="nm_penyelenggara" placeholder="Nama Penyelanggara"
              name="nm_penyelenggara" value="{{$validasi->nm_penyelenggara}}" disabled>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Bidang Prestasi</label>
            <select class="form-control" id="bidang" name="bidang" value="{{$validasi->bidang}}" disabled>
              <option value="">Pilih Kategori</option>
              <option value="seni" @if($validasi->bidang == "seni") selected @endif>Seni</option>
              <option value="olahraga" @if($validasi->bidang == "olahraga") selected @endif>Olahraga</option>
              <option value="sains" @if($validasi->bidang == "sains") selected @endif>Sains</option>
              <option value="teknologi" @if($validasi->bidang == "teknologi") selected @endif>Teknologi</option>
              <option value="intelektual" @if($validasi->bidang == "intelektual") selected @endif>Intelektual</option>
              <option value="lainnya" @if($validasi->bidang == "lainnya") selected @endif>Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Capaian Prestasi</label>
            <input type="text" class="form-control" id="capaian" placeholder="Capaian Yang Diperoleh"
              name="capaian" value="{{$validasi->capaian}}" disabled>
          </div>
          <div class="form-group">
            <label>Tingkat Prestasi</label>
            <select class="form-control" id="tingkat" name="tingkat" value="{{$validasi->tingkat}}" disabled>
              <option value="">Pilih Kategori</option>
              <option value="lokal" @if($validasi->tingkat == "lokal") selected @endif>Lokal</option>
              <option value="provinsi" @if($validasi->tingkat == "provinsi") selected @endif>Provinsi</option>
              <option value="wilayah" @if($validasi->tingkat == "wilayah") selected @endif>Wilayah</option>
              <option value="nasional" @if($validasi->tingkat == "nasional") selected @endif>Nasional</option>
              <option value="internasional" @if($validasi->tingkat == "internasional") selected @endif>Internasional</option>
            </select>
          </div>
  
          <div class="form-group">
            <label for="exampleInputEmail1">URL Informasi</label>
            <input type="text" class="form-control" id="url" placeholder="Masukan URL" name="url" value="{{$validasi->url}}" disabled>
          </div>
          <div class="form-group">
            <label>Tanggal Kegiatan:</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="far fa-calendar-alt"></i>
                </span>
              </div>
              <input type="date" class="form-control float-right" id="tgl" name="tgl" value="{{$validasi->tgl}}" disabled>
            </div>
  
            <div class="form-group">
              <label for="exampleInputFile">Sertifikat</label>
              <div class="input-group">
                <div class="custom-file">
                    <a href="{{asset('image/'.$validasi->sertifikat)}}" height="150" width="200" target="_blank">Lihat Gambar</a>
                </div>
              </div>
            
            <div class="form-group">
              <label for="exampleInputFile">Foto Kegiatan</label>
              <div class="input-group">
                <div class="custom-file">
                    <a href="{{asset('image/'.$validasi->foto)}}" height="150" width="200" target="_blank">Lihat Gambar</a>
                </div>
              </div>
  
              <div class="form-group">
                <label for="exampleInputFile">Buku Tabungan</label>
                <div class="input-group">
                  <div class="custom-file">
                    <a href="{{asset('image/'.$validasi->buku_tabungan)}}" height="150" width="200" target="_blank">Lihat Gambar</a>
                  </div>
                </div>
  
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="/pmandiri" class="btn btn-primary float-right">Kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection