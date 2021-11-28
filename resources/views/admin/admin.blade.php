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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> --}}
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  {{-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
 </head>


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
            <h1 class="m-0 text-dark">Data Kunjungan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Kunjungan</li>
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

        <div class="card-body">
            <a href="/pengunjung/tambah" target="_blank" class="btn btn-primary">Tambah Pengunjung</a>
            <a href="/pengunjung/trash_all" class="btn btn-danger">Move to Bin</a>

            <form action="data_pengunjung" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row mt-md-3">
                <label for="from" class="col-form-label">From</label>
                    <div class="col-md-2">
                    <input type="date" class="form-control input-sm" id="from" name="from">
                    </div>
                    <label for="from" class="col-form-label">To</label>
                    <div class="col-md-2">
                        <input type="date" class="form-control input-sm" id="to" name="to">
                    </div>

                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary btn-md" name="search" >Filter Tanggal</button>
                        <button type="submit" class="btn btn-success btn-md" name="exportExcel" >Export Excel</button>

                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control input-sm" id="nama" name="nama" placeholder="Cari nama">
                    </div>
                    <div class="col-md">
                        <button type="submit" class="btn btn-primary btn-md" name="cari" >Cari</div></button>
                    </div>
                </div>



            </form>


            <table class="table table-bordered table-hover table-striped table-responsive-sm " id="order_table">
                <thead>
                    <tr class="text-xs">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Instansi  </th>
                        <th>Alamat  </th>
                        <th>Nomor Telepon</th>
                        <th>Tanggal</th>
                        <th>Keperluan</th>
                        <th>Bertemu dengan</th>
                        <th>Status</th>
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


                        @if ($p->status=='Dilayani')
                           <td><span style="font-size: 8pt;" class="badge badge-success">{{ $p->status}}</span></td>
                        @else
                           <td><span style="font-size: 8pt;" class="badge badge-danger">{{ $p->status}}</span></td>
                        @endif


                        <td>
                            <a href="/pengunjung/{{ $p->id }}/edit" class="fa fa-2x fa-edit text-warning" style="padding-right: 10%; padding-bottom: 10%;" ></a>


                        <a href="/pengunjung/hapus/{{ $p->id }}" class=" fa fa-2x fa-trash-alt text-fuchsia"></a>




                        </td>
                    </tr>
                    @php
                       $i++;
                    @endphp
                    @endforeach

                    <br>
                </tbody>
            </table>



            {{ $pengunjung->links() }}
            {{-- <a href="export-excel" class="btn btn-primary">Export Excel</a> --}}
        </div>





      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

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
