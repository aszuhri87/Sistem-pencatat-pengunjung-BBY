<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengunjung</title>
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">
      <!-- Theme style -->
  {{-- <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}"> --}}
    <style>

                img.tengah {
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                    padding-top:2%;
                    height: 5%;
                    width:5%;
                }
        }
    </style>


  </head>


  <body >



    <div class="container">

        <img src="{{asset('image/bby.jpg')}}" class="tengah" >
            <h3 class="text-center text-bold">Selamat Datang di Balai Bahasa DI Yogyakarta</h3>
            <p class="text-center">Silahkan masukkan data anda pada form dibawah ini</p>
            <h1 style="font-size: 100%; font-family: Arial, Helvetica, sans-serif; font-weight: bold;" class="text-center" id="jam"></h1>

            @if(Session::has('status'))
            <div class="alert alert-success">{{ Session::get('status') }}</div>
            @endif

        <div class="card mt-5 ">

            {{-- <div class="card-header bg-primary">

                <div class="{{ Request::is('pengunjung') ? 'active' : Request::is('/') ? 'active' : ''}}"><a class=" nav-link text-white" href="{{ url('/') }}"><h3>Lihat</h3></a></div>

            </div> --}}

         <!--      <li class="{{ Request::is('pengunjung/tambah') ? 'active' : ''}}"><a href="{{ url('/') }}/pengunjung/tambah">Add</a></li>-->



              <div class="col-md-auto">
              @if(Session::has('message'))
              <p class="alert alert-success">{{ Session::get('message') }}</p>
              @endif
                @yield('content')
              </div>

        </div>
        <br>


    </div>

    <script type="text/javascript">
        window.onload = function() { jam(); }

        function jam() {
         var e = document.getElementById('jam'),
         d = new Date(), h, m, s;
         h = d.getHours();
         m = set(d.getMinutes());
         s = set(d.getSeconds());
         var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];

        var date = new Date();

        var day = date.getDate();

        var month = date.getMonth();

        var thisDay = date.getDay(),

         thisDay = myDays[thisDay];

        var yy = date.getYear();

        var year = (yy < 1000) ? yy + 1900 : yy;

         e.innerHTML = 'Jam: '+h +':'+ m +':'+ s+' | '+thisDay + ', ' + day + ' ' + months[month] + ' ' + year;

         setTimeout('jam()', 1000);
        }

        function set(e) {
         e = e < 10 ? '0'+ e : e;
         return e;
        }
       </script>

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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="{{asset('sweetalert/sweetalert.min.js')}}"></script>
    @include ('sweet::alert')
  </body>
</html>
