<!DOCTYPE html>
<html>
<head>
    <title>Halaman Pemohon</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ url('/') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ url('/') }}/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/font-awesome.min.css')}}">
    <script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="card mt-5">
            {{-- <div class="card-header bg-primary text-white">
                <h4>Halaman Permohonan Kunjungan</h4>
                <p>Halaman ini digunakan untuk melakukan permohonan izin untuk berkunjung.</p>

            </div> --}}


            <div class="row" style="padding:2%">
                <div class="col-md-6 col-md-offset-3">

                    @if (session('status'))
                    <div class="alert alert-success">
                      {{ session('status') }}
                    </div>
                  @endif



                    <form action="{{url('permohonan')}}" method="post">

                        {{ csrf_field() }}

                        <label for="name">Nama Anda</label>
                        <input class="form-control" type="text" name="name" placeholder="Nama" />
                        @if ($errors->has('name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif

                        <label for="email">Alamat Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Email" />
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif

                        <label for="message">Isi Pesan Permohonan</label>
                        <textarea class="form-control" name="message" id="" style="height:10%;" placeholder="Pesan permohonan" cols="10" rows="10"></textarea>

                        @if ($errors->has('message'))
                        <span class="help-block">
                          <strong>{{ $errors->first('message') }}</strong>
                        </span>
                      @endif
                      <br>

                                <!-- show captcha image html -->
                                <label>Retype the characters from the picture</label>
                                {!! captcha_image_html('ContactCaptcha') !!}
                                <input type="text" id="CaptchaCode" name="CaptchaCode">

                                @if ($errors->has('CaptchaCode'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('CaptchaCode') }}</strong>
                                </span>
                                @endif



                        <button class="btn btn-primary btn-block">Send</button>
                    <form>
                </div>
            </div>

        </div>


    </div>


</body>


<script>
 $(".btn-refresh").click(function(){

$.ajax({

   type:'GET',

   url:'/refreshCaptcha',

   success:function(data){

      $(".captcha span").html(data.captcha);

   }

});

});
    </script>

</html>
