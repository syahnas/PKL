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
          <input class="form-control" id="id" name="id" value="{{$id}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">NPM</label>
          <input class="form-control" id="npm" placeholder="Masukan NPM" name="npm">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nama Mahasiswa</label>
          <input type="text" class="form-control" id="nm_mhsw" placeholder="Masukan Nama" name="nm_mhsw">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Kompetisi</label>
          <input type="text" class="form-control" id="nm_kompetisi" placeholder="Nama Kompetisi"
            name="nm_kompetisi">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Penyelenggara</label>
          <input type="text" class="form-control" id="nm_penyelenggara" placeholder="Nama Penyelanggara"
            name="nm_penyelenggara">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Bidang Prestasi</label>
          <select class="form-control" id="bidang" name="bidang">
            <option value="">Pilih Kategori</option>
            <option value="seni">Seni</option>
            <option value="olahraga">Olahraga</option>
            <option value="sains">Sains</option>
            <option value="teknologi">Teknologi</option>
            <option value="intelektual">Intelektual</option>
            <option value="lainnya">Lainnya</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Capaian Prestasi</label>
          <input type="text" class="form-control" id="capaian" placeholder="Capaian Yang Diperoleh"
            name="capaian">
        </div>
        <div class="form-group">
          <label>Tingkat Prestasi</label>
          <select class="form-control" id="tingkat" name="tingkat">
            <option value="">Pilih Kategori</option>
            <option value="lokal">Lokal</option>
            <option value="provinsi">Provinsi</option>
            <option value="wilayah">Wilayah</option>
            <option value="nasional">Nasional</option>
            <option value="internasional">Internasional</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">URL Informasi</label>
          <input type="text" class="form-control" id="url" placeholder="Masukan URL" name="url">
        </div>
        <div class="form-group">
          <label>Tanggal Kegiatan:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="far fa-calendar-alt"></i>
              </span>
            </div>
            <input type="date" class="form-control float-right" id="tgl" name="tgl">
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Sertifikat</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" id="sertifikat" name="sertifikat">
                @error('sertifikat')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
          
          <div class="form-group">
            <label for="exampleInputFile">Foto Kegiatan</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" id="foto" name="foto">
                @error('foto')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label for="exampleInputFile">Buku Tabungan</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" id="buku_tabungan" name="buku_tabungan">
                  @error('buku_tabungan')
                    <div class="alert alert-danger">{{ $message }}</div> 
                  @enderror
                </div>
              </div>

          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Kirim">
            <a href="/formulir" class="btn btn-primary float-right">Kembali</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection