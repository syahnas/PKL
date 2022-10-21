<!DOCTYPE html>
<html>

<head>
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset ('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
        href="{{asset ('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset ('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- Theme style -->

    <style>
        #example2 {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #example2 td,
        #example2 th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #example2 tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #example2 tr:hover {
            background-color: #ddd;
        }

        #example2 th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #0292eb;
            color: white;
        }
    </style>
</head>

<body>
    <img src="{{asset('gambar/kop.jpeg')}}" class="float-left" width="333" height="85">
    <center>
        <h1>REKAP DATA MAHASISWA BERPRESTASI</h1>
        <h3>UNIVERSITAS MUHAMMADIYAH BANJARMASIN</h3>
        <p>=======================================================================================================================
        </p>
    </center>
    <div style="width: 30%; text-align: left; float: left;"><span id="tanggalwaktu"></span></div><br><br>
    <table id="example2">
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

    <script src="{{asset ('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset ('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset ('adminlte/plugins/jquery/jquery.min.js')}}"></script>

    <script>
        window.print();
    </script>
    <script>
        var tw = new Date();
if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
else (a=tw.getTime());
tw.setTime(a);
var tahun= tw.getFullYear ();
var hari= tw.getDay ();
var bulan= tw.getMonth ();
var tanggal= tw.getDate ();
var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
    </script>
</body>
</html>