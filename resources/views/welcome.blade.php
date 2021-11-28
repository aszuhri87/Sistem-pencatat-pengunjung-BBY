<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <!-- Styles -->
        <style>
            html, body {

                background-image: linear-gradient( rgba(0, 0, 0, 0.609), rgba(0, 0, 0, 0.609) ), url("/image/bgr.jpg");
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: auto;
                width:100%;
                margin: 0;
            }


            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            img.tengah {
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                     padding-top:2%;
                    height: 40%;
                    width:40%;
                }

            .footer {
            position: fixed;
            left: 0;
            bottom: 5%;
            width: 100%;
            background-color: transparent;
            color: white;
            text-align: center;
            }
</style>

    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="https://balaibahasadiy.kemdikbud.go.id/laman/index.php/organisasi/sejarah"> Sejarah</a>
                        </li>
                        <li>
                        <a class="nav-link" href="https://balaibahasadiy.kemdikbud.go.id/laman/index.php/informasi/berita"> Berita</a>
                    </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://balaibahasadiy.kemdikbud.go.id/laman/index.php/organisasi/visi-misi"> Visi & Misi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://balaibahasadiy.kemdikbud.go.id/laman/index.php/organisasi/tugas-dan-fungsi">Tugas & Fungsi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://balaibahasadiy.kemdikbud.go.id/laman/index.php/saran-kritik">Saran & Kritik</a>
                        </li>


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        <i class="fa fa-mail-bulk nav-link"> <i style="font-family: 'Nunito', sans-serif;">balaibahasadiy@kemdikbud.go.id</i></i>



                            <li class="nav-item dropdown">
                                <li class="nav-item">


                                        @csrf
                                    </form>
                                </div>
                            </li>

                    </ul>
                </div>
            </div>
        </nav>

            <div class="content">
                <div class="title m-b-md text-white">
                   Selamat Datang
                </div>
                <h6 class="text-white">Website ini digunakan untuk melakukan permohonan kunjungan dan isi buku tamu secara online di Balai Bahasa DI Yogyakarta</h6>
                <h6 class="text-white">Silahkan pilih opsi di bawah ini</h6>
                <br>
                <div class="links">



                   <span style="padding: 1%" class="bg-orange"><a  class="text-white text-bold" href="/permohonan">Permohonan Kunjungan</a></span>
                    <span style="padding: 1%" class="bg-orange"><a class="text-white text-bold" href="/pengunjung/tambah">Isi Buku Tamu</a>
                    </span>
                </div>
            </div>


        </div>
        <div class="footer">

            <strong>Copyright &copy; 2020 <a href="https://balaibahasadiy.kemdikbud.go.id/">Balai Bahasa DI Yogyakarta</a>.</strong> All rights reserved.
        </div>
    </body>
</html>
