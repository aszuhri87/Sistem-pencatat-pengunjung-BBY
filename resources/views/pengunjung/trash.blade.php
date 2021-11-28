
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Dashboard</title>



  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('/icofont.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->

  @include('admin/header')

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  @include('admin/sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Recycle Bin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Recycle Bin</li>
            </ol>

          </div><!-- /.col -->
        </div><!-- /.row -->

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @if(Session::has('status'))
    <div class="alert alert-default-info">{{ Session::get('status') }}</div>
    @endif

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        {{-- <div class="card-header text-center bg-orange">
                                Data Pengunjung
                            </div> --}}
                            <div class="card-body">
                                <a href="/pengunjung/kembalikan_semua" class="btn btn-success">Kembalikan Semua</a>
                                <a href="/pengunjung/hapus_semua" class="btn btn-danger">Hapus Permanen Semua</a>

                                <br/>
                                <br/>
                                <table class="table table-bordered table-hover table-striped table-responsive-sm">
                                    <thead>
                                        <tr class="text-xs">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>asal  </th>
                                            <th>alamat  </th>
                                            <th>no hp</th>
                                            <th>tanggal</th>
                                            <th>keperluan</th>
                                            <th>Bertemu dengan</th>
                                            <th>Status Pegawai</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php

                                        $i=1;

                                        @endphp
                                        @foreach($pengunjung  as $p)

                                        <tr class="text-xs">
                                        <td>{{$i}}</td>
                                            <td>{{ $p->nama_pengunjung }}</td>
                                            <td>{{ $p->asal->nama_tempat}}</td>
                                            <td>{{ $p->asal->alamat }}</td>
                                            <td>{{ $p->no_hp }}</td>
                                            <td>{{$p->created_at}}</td>
                                            <td>{{ $p->keperluan }}</td>
                                            <td>{{ $p->pegawai->nama_pegawai}}</td>
                                            <td>{{$p->pegawai->status}}</td>
                                            <td>
                                                <a href="/pengunjung/restore/{{ $p->id }}" class="fa fa-2x fa-trash-restore text-success" style="padding-right: 10%; padding-bottom: 10%;" ></a>


                                            <a href="/pengunjung/hapus_permanen/{{ $p->id }}" class=" fa fa-2x fa-trash text-danger"></a>



                                            </td>
                                        </tr>
                                        @php
                                           $i++;
                                        @endphp
                                        @endforeach

                                        <br>
                                    </tbody>
                                </table>

                            </div>




      </div><!-- /.container-fluid -->



    </div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('admin/footer')

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte/dist/js/adminlte.min.js')}}"></script>
</body>
</html>


