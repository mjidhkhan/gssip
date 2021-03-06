
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'G3T SIP') }}</title>

  <!-- Font Awesome -->
  
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-fixed bg-gray-500">
  
  <div class="hold-transition login-page bg-gray-700">
    <div class="login-box">
        <div class="row0 justify-content-center ">
            <div class="col-12">
                <div class="card">
                    <div class="card-header  bg-gray-400"> 
                        <span class="text-lg fas fa-lock  float-left text-orange-600 "></span>
                        <span class="text-base pl-2 text-yellow-600">  {{__('G3T SIP Login')}}</span>
                    </div>
                    <div class="card-body login-card-body bg-gray-200">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group rowo">
                                <div class="input-group mb-3">
                                    <input 
                                    id="email" 
                                    type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    name="email" 
                                    value="{{ old('email') }}" 
                                    required 
                                    autocomplete="email" 
                                    autofocus
                                    placeholder="Email"
                                    >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row0">
                                <div class="input-group mb-3">
                                    <input 
                                    id="password" 
                                    type="password" 
                                    class="form-control @error('password') is-invalid @enderror" 
                                    name="password" 
                                    required 
                                    autocomplete="current-password"
                                    placeholder="Password"
                                    >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                        </div>
                                    </div>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-check icheck-primary">
                                        <input 
                                        class="form-check-input" 
                                        type="checkbox" 
                                        name="remember" 
                                        id="remember" {{ old('remember') ? 'checked' : '' }}
                                        >

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="">
                                        <button type="submit" class="btn btn-secondary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                             <p class="mb-1">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                 @endif
                             </p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
