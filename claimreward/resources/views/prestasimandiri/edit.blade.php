<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Formulir Individu</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('claim/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('claim/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="icon" href="{{asset('gambar/logouniv.png')}}">
</head>

<body>
  <div class="card card-primary">
    <div class="card-header">
      <h1 class="card-title">Formulir Pendaftaran Claim Reward Individu</h1>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/pmandiri/{{$pmandiri->id}}" method="POST" role="form">
    @method('put')
      @csrf
      <div class="container">
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Id Transaksi</label>
          <input type="string" class="form-control" id="exampleInputEmail1" placeholder="Masukan ID" name="id" value="{{$pmandiri->id}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">NPM</label>
          <input class="form-control" id="exampleInputEmail1" placeholder="Masukan NPM" name="npm" value="{{$pmandiri->npm}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nama Mahasiswa</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama" name="nm_mhsw" value="{{$pmandiri->nm_mhsw}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Kompetisi</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Kompetisi" name="nm_kompetisi" value="{{$pmandiri->nm_kompetisi}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Penyelenggara</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Penyelanggara" name="nm_penyelenggara" value="{{$pmandiri->nm_penyelenggara}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Bidang Prestasi</label>
          <select class="form-control" name="bidang">
            <option value="">Pilih Kategori</option>
            <option value="seni">Seni</option>
            <option value="olahraga">Olahraga</option>
            <option value="sains">Sains</option>
          </select>
        </div>
        <div class="form-group" >
          <label for="exampleInputEmail1">Capaian</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Capaian Yang Diperoleh" name="capaian" value="{{$pmandiri->capaian}}">
        </div>
        <div class="form-group">
          <label>Tingkat Prestasi</label>
          <select class="form-control" name="tingkat">
            <option value="">Pilih Kategori</option>
            <option value="provinsi">Provinsi</option>
            <option value="wilayah">Wilayah</option>
            <option value="nasional">Nasional</option>
            <option value="internasional">Internasional</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">URL Informasi</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan URL" name="url" value="{{$pmandiri->url}}">
        </div>
        <div class="form-group">
          <label>Tanggal Kegiatan:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="far fa-calendar-alt"></i>
              </span>
            </div>
            <input type="date" class="form-control float-right" id="reservation" name="tgl" value="{{$pmandiri->tgl}}">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Sertifikat</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="sertifikat" value="{{$pmandiri->sertifikat}}">
                <label class="custom-file-label" for="exampleInputFile">Choose File</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Foto Kegiatan</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="foto" value="{{$pmandiri->foto}}">
                <label class="custom-file-label" for="exampleInputFile">Choose File</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Buku Tabungan</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" name="buku_tabungan" value="{{$pmandiri->buku_tabungan}}">
                  <label class="custom-file-label" for="exampleInputFile">Choose File</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Upload</span>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="update">
          </div>
          <div class="card-footer">
            <button><a href="/formulir">Kembali</a></button>
          </div>
        </div>
    </form>
  </div>
</body>