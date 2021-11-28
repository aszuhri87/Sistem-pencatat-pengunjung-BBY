
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
    <h4>Edit Pegawai</h4>

</div>


   <div class="col-lg-12">

<div class="col-md-6 col-md-offset-3" style="padding:2%;">
    <form method="post" action="{{ url('/') }}/pegawai/{{$pegawai->id}}">

      <div class="form-group">
        {{method_field('PATCH')}}
        {{ csrf_field() }}
         <label for="nama_pengunjung">Nama pegawai</label>
         @foreach ($pegawai as $pe)
            <p>{{$pe->nama_pegawai}}</p>
         @endforeach
         {{-- <select name="pegawai_id" class="form-control">
             @foreach ($pegawai as $pe)
             <form method="post" action="{{ url('/') }}/pegawai/{{$pe->id}}">
             <option value="{{$pe->id==$pe->id ? 'selected': ''}}">{{ $pe->nama_pegawai}}</option>
             @endforeach
         </select> --}}
      </div>
      <div class="form-group">


        <label for="nama_pegawai">Status Pegawai</label>
            <select name="status" class="form-control">
                {{-- @foreach ($pegawai as $pe) --}}
                <option value="Tidak Spesifik">{{'--Tidak Spesifik--'}}</option>
                <option value="Hadir">{{ 'Hadir'}}</option>
                <option value="Berhalangan">{{ 'Berhalangan'}}</option>
                {{-- @endforeach --}}
            </select>
         {{-- <label for="nama_pegawai">Pegawai Yang ingin ditemui</label>
         <input type="text" class="form-control" value="{{old('nama_pegawai')}}" name="nama_pegawai" id="nama_pegawai" required> --}}
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
