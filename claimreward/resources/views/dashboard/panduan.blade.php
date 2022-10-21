@extends('layout.mastercode')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-12" id="accordion">
            <div class="card card-primary card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            1. Lengkapi Berkas
                        </h4>
                    </div>
                </a>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                        Berkas yang perlu disiapkan sebelum mendaftar Claim Reward yaitu URL informasi, Foto Sertifikat, Foto Kegiatan, dan Foto Buku Tabungan.
                    </div>
                </div>
            </div>
            <div class="card card-primary card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            2. Masuk ke Halaman Formulir
                        </h4>
                    </div>
                </a>
            </div>
            <div class="card card-primary card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            3. Klik daftar pada Formulir Claim Reward
                        </h4>
                    </div>
                </a>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Isi formulir sesuai dengan data yang sebenarnya.
                    </div>
                </div>
            </div>
            <div class="card card-primary card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            4. Selesai
                        </h4>
                    </div>
                </a>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Setelah selesai pendaftaran, maka Mahasiswa ataupun Mahasiswi yang sudah mendafar akan menunggu hasilnya yang akan diumuman di halaman status.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            @endsection