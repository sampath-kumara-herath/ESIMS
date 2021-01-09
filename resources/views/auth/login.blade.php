<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ESIMS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .text-center {
            text-align: center !important;
        }
        .loginbody {
            -webkit-box-align: center;
            -webkit-box-pack: center;
            padding-top: 80px;
            padding-bottom: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(190,116,138,1) 49%, rgba(199,235,240,1) 100%);
        }
        html, body {
            height: 100%;
        }
        /*Middle card */
        .middlebox {
            margin: 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            
        }
        *, ::after, ::before {
            box-sizing: border-box;
        }
        /*Login form */
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        /*WUSl logo resize class*/
        .logoimage{
            max-width:25%; 
            height:auto; 
        }
    </style>
</head>

<body class="loginbody">
    <div class="card middlebox text-center col-lg-4 col-md-6">
        <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
            <img class="mb-4 logoimage" src="./img/WUSL_Logo.png" alt="WISL_logo" >
            <h1 class="h3 mb-3 ">{{ __('ESIMS') }}</h1>
            <label for="username" class="sr-only">{{ __('Username') }}</label>
            <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="User Name">
            
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="password" class="sr-only">{{ __('Password') }}</label>
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
            
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror


            <div class="checkbox my-2">
                <label>
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>   {{ __('Remember Me') }}
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Login') }}</button>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            <p class="mt-5 mb-1 text-muted">© 2021</p>
            <p class="mb-3 text-muted">Wayamba University of Sri Lanka</p>  
        </form>
    </div>
    
  

</body>
