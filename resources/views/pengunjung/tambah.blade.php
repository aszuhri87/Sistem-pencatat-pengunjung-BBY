
@extends('pengunjung.tampilan')
@section('content')
    @if (count($errors) > 0)
   <div class="alert alert-danger errors-list">
      <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
   @endif




<form method="post" action="{{ url('/') }}/pengunjung/store">
<div class="col-sm-6" style="padding:2%;">
    {{-- {{method_field('PATCH')}} --}}
      {{ csrf_field() }}
      <div class="form-group">
         <label for="nama_pengunjung">Nama</label>
         <input type="text" class="form-control" value="{{old('nama_pengunjung')}}" name="nama_pengunjung" id="nama_pengunjung" required>
      </div>
      <div class="form-group">
         <label for="no_hp">Nomor Telepon</label>
         <input type="text" name="no_hp" value="{{old('no_hp')}}" class="form-control" id="no_hp" required>
      </div>

      <div class="form-group">
         <label for="keperluan">Keperluan</label>
         <input type="text" name="keperluan" value="{{old('keperluan')}}" class="form-control" id="keperluan" required>
      </div>


    <br>

</div>
<div class="col-sm-6" style="padding:2%;">

      <div class="form-group">
         <label for="nama_tempat">Instansi</label>
         <input type="text" class="form-control" value="{{old('nama_tempat')}}" name="nama_tempat" id="nama_tempat">
      </div>
      <div class="form-group">
         <label for="alamat">Alamat</label>
         <input type="text" class="form-control" value="{{old('alamat')}}" name="alamat" id="alamat">
      </div>
      <div class="form-group">

        <label for="nama_pegawai">Bertemu dengan</label>
            <select name="pegawai_id" class="form-control">

                @foreach ($pegawai as $pe)
                <option value="{{$pe->id}}">{{ $pe->nama_pegawai}}</option>
                @endforeach
            </select>
         {{-- <label for="nama_pegawai">Pegawai Yang ingin ditemui</label>
         <input type="text" class="form-control" value="{{old('nama_pegawai')}}" name="nama_pegawai" id="nama_pegawai" required> --}}
      </div>

      <label>Retype the characters from the picture</label>
      {!! captcha_image_html('ContactCaptcha') !!}
      <input type="text" id="CaptchaCode" name="CaptchaCode">

      @if ($errors->has('CaptchaCode'))
      <span class="help-block">
          <strong>{{ $errors->first('CaptchaCode') }}</strong>
      </span>
      @endif



    <button type="submit" name="btn_submit" value="Submit" class="btn bg-primary" >Submit</button>


</div>


<div style= "padding-left:2%;">

</div>
</form>
<br>


@endsection
