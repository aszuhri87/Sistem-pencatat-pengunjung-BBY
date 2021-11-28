
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengunjung</title>
    <link href="{{ url('/') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ url('/') }}/css/styles.css" rel="stylesheet">


  </head>


  <body>
    <div class="container">
        <div class="card mt-5">
    @if (count($errors) > 0)
   <div class="alert alert-danger errors-list">
      <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
   @endif

   <div class="card-header bg-primary">
       <h4>Tambah Pegawai</h4>

   </div>


   <div class="col-md-12">
<form method="post" action="{{ url('/') }}/pegawai/store">
<div class="col-md-6 col-md-offset-3" style="padding:2%;">
    {{-- {{method_field('PATCH')}} --}}
      {{ csrf_field() }}
      <div class="form-group">
         <label for="nama_pengunjung">Nama pegawai</label>
         <input type="text" class="form-control" value="{{old('nama_pegawai')}}" name="nama_pegawai" id="nama_pegawai" required>
      </div>
      <div class="form-group">

        <label for="nama_pegawai">NIP</label>
        <input type="text" class="form-control" value="{{old('nip')}}" name="nip" id="nip">
         {{-- <label for="nama_pegawai">Pegawai Yang ingin ditemui</label>
         <input type="text" class="form-control" value="{{old('nama_pegawai')}}" name="nama_pegawai" id="nama_pegawai" required> --}}
      </div>
      <div class="form-group">
      <label for="bidang">Bidang</label>
      <select name="bidang" class="form-control">
        <option value="Tidak Spesifik">{{'--Tidak Spesifik--'}}</option>
          <option value="Kepala Balai">{{ 'Kepala Balai'}}</option>
          <option value="Tata Usaha">{{ 'Tata Usaha'}}</option>
          <option value="Perpustakaan">{{ 'Perpustakaan'}}</option>
          <option value="Pengembangan dan Perlindungan Bahasa">{{ 'Pengembangan dan Perlindungan Bahasa'}}</option>
          <option value="Pengembangan dan Perlindungan Sastra">{{ 'Pengembangan dan Perlindungan Sastra'}}</option>
      </select>
    </div>
      <div style= "padding:2%;">
        <button type="submit" name="btn_submit" value="Submit" class="btn bg-primary" >Submit</button>
    </div>

</div>

</div>


</form>



</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
