
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laboratorium Sistem Informasi | Login</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/aldo.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset('font-awesome/css/all.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css')}}" rel="stylesheet">
  </head>

  <body>
    <div class="row col-lg-12">
    <div class="col-lg-6 mt-3">
        <hr>
        <h1 class="h3 text-center">Laboratorium Sistem Informasi</h1>
        <h3 class="h5 mb-3 text-center">Universitas Gunadarma</h3>
        <hr>
    </div>
    <div class="col-lg-6">
        {{-- <form class="form-signin mt-2" method="post" action="{{route('login')}}">
            {{ csrf_field() }}
          <input type="username" id="username" class="form-control" placeholder="Nomor Asisten" required autofocus>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Ingat Saya
            </label>
          </div>
          <button class="btn btn-lg btn-outline-primary btn-block" type="submit">Log In</button>
          <p class="mt-5 mb-3 text-center text-muted">Copyright &copy; 2018 Aldo Hardiansyah</p>
        </form> --}}
        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf

            <div class="form-group row">
                <label for="username" class="col-sm-4 col-form-label text-md-right">{{ __('Username') }}</label>

                <div class="col-md-6">
                    <input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                    @if ($errors->has('username'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </div>
            </div>
        </form>
    </div>


</div>
  </body>
</html>
