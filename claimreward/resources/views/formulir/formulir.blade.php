@extends('layout.mastercode')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Formulir Pendaftaran</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Formulir</h5>
              <p class="card-text">
                Pendaftaran Formulir Claim Reward
              </p>

              <a href="/pmandiri/create" class="btn btn-primary">Daftar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection