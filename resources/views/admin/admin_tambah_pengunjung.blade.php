<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tutorial Laravel #21 : CRUD Eloquent Laravel - www.malasngoding.com</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">

                </div>
                <div class="card-body">
                    <a href="admin/admin_pengunjung" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="post" action="admin/admin_pengunjung/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama Pengunjung</label>
                            <input type="text" name="nama_pengunjung" class="form-control" placeholder="Nama Pengunjung">

                            @if($errors->has('nama_pengunjung'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_pengunjung')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Asal Instansi</label>
                            <input type="text" name="nama_instansi" class="form-control" placeholder="Asal Instansi">

                            @if($errors->has('nama_instansi'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_instansi')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat instansi .."></textarea>

                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>no hp</label>
                            <input type="text" name="no_hp" class="form-control" placeholder="">

                            @if($errors->has('no_hp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_hp')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>
