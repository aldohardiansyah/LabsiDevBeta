<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Laboratorium Sistem Informasi | @yield('title')</title>

        <!-- CSS Bawaan Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/aldo.css')}}" rel="stylesheet">

        <!-- Buat Font Awesome -->
        <link href="{{ asset('font-awesome/css/all.css')}}" rel="stylesheet">

        <!-- Buat Menu Select 2 -->
        <link href="{{ asset('css/select2.min.css')}}" rel="stylesheet">

        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('js/jquery.min.js') }}"></script> {{--jquery 3.3.1--}}
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('js/select2.min.js') }}"></script>

    </head>

    <body>

        @if (Auth::guest())
            @include('templates/navbar')
        @elseif (Auth::user()->role=='Asisten')
            @include('templates/navbar_ast')
        @elseif (Auth::user()->role=='Staff')
            @include('templates/navbar_admstaff')
        @elseif (Auth::user()->role=='PJ Shift')
            @include('templates/navbar_adm')
        @endif


        @yield('content')
        <!-- Footer -->
        <footer class="page-footer py-4 bg-white">
         <hr>
          <div class="container">
              <!-- Marketing Icons Section -->
              <div class="row">
                  <div class="col-lg-2 mt-1">
                  </div>
                  <div class="col-lg-1">
                     <a href="http://baak.gunadarma.ac.id"><img src="{{asset('img/icon_baak.png')}}" width="150px" style="display: block; margin-left: auto; margin-right: auto;" alt=""></a>
                  </div>
                  <div class="col-lg-1 mt-1">
                  </div>
                  <div class="col-lg-1">
                       <a href="http://studentsite.gunadarma.ac.id"><img src="{{asset('img/icon_ss.png')}}" width="150px" style="display: block; margin-left: auto; margin-right: auto;" alt=""></a>
                  </div>
                  <div class="col-lg-1 mt-1">
                  </div>
                  <div class="col-lg-1">
                       <a href="http://filkom.gunadarma.ac.id/sisinformasi/"><img src="{{asset('img/icon_si.png')}}" width="150px" style="display: block; margin-left: auto; margin-right: auto;" alt=""></a>
                  </div>
                  <div class="col-lg-1 mt-1">
                  </div>
                  <div class="col-lg-1">
                       <a href="http://library.gunadarma.ac.id/"><img src="{{asset('img/icon_perpus.png')}}" width="150px" style="display: block; margin-left: auto; margin-right: auto;" alt=""></a>
                  </div>
              </div>
              <!-- /.row -->
            <p class="mt-4 text-center text-secondary">Copyright &copy; 2018 Aldo Hardiansyah</p>
          </div>
          <!-- /.container -->
        </footer>


    <script type="text/javascript">
            $(document).ready(function() {
                $('.selectdua').select2();
            });
    </script>

    </body>

</html>
