<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ url('/') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ url('/') }}/css/styles.css" rel="stylesheet">
        <title>Data Pengunjung</title>
    </head>
    <body>
        <div class="container" >
            <div class="card mt-5 ">
                <div class="card-header text-center bg-orange">
                    Data Pengunjung
                </div>
                <div class="card-body">

                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped table-responsive-lg">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>asal asal</th>
                                <th>alamat asal</th>
                                <th>no hp</th>
                                <th>tanggal</th>
                                <th>keperluan</th>



                            </tr>
                        </thead>
                        <tbody>
                            @php

                                $i=1;

                            @endphp
                            @foreach($pengunjung  as $p)
                            <tr>
                            <td>{{$i}}</td>
                                <td>{{ $p->nama_pengunjung }}</td>
                                <td>{{ $p->asal->nama_tempat }}</td>
                                <td>{{ $p->asal->alamat }}</td>
                                <td>{{ $p->no_hp }}</td>
                                <td>{{$p->created_at}}</td>
                                <td>{{ $p->keperluan }}</td>


                            </tr>
                            @php
                            $i++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
