
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

            <div class="card-header bg-primary">

               <h2> Edit Data </h2>
            </div>


              <div class="col-lg-12"></div>
              <div class="col-lg-12">
              @if(Session::has('message'))
              <p class="alert alert-success">{{ Session::get('message') }}</p>
              @endif
    @if (count($errors) > 0)
   <div class="alert alert-danger errors-list">
      <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
   @endif



<form method="post" action="{{ url('/') }}/pengunjung/{{$pengunjung->id}}">
<div class="col-md-6" style="padding:2%;">
    {{method_field('PATCH')}}
      {{ csrf_field() }}


        <label for="nama_pegawai">Pegawai Yang diganti</label>
            <select name="pegawai_id" class="form-control">

                @foreach ($pegawai as $pe)
                <option value="{{$pe->id}}" {{in_array($pe->id, $pengunjung->pegawai->pluck('id')
                ->toArray()) ? 'selected':''}}>{{ $pe->nama_pegawai}}</option>
                @endforeach
            </select>

        <label for="status">Status</label>
            <select name="status" class="form-control">
                <option value="Tidak dilayani">{{ 'Tidak dilayani'}}</option>
                <option value="Dilayani">{{'Dilayani'}}</option>
            </select>
         {{-- <label for="nama_pegawai">Pegawai Yang ingin ditemui</label>
         <input type="text" class="form-control" value="{{old('nama_pegawai')}}" name="nama_pegawai" id="nama_pegawai" required> --}}
      </div>




</div>



<div style= "padding:2%;">
    <button type="submit" name="btn_submit" value="Submit" class="btn bg-primary" >Edit</button>
</div>
</form>




</div>

</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
