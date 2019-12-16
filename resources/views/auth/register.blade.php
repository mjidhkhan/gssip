@extends('layouts.app')

@section('content')
<div class="hold-transition register-page">
    <div class="register-box">
        <div class="row0 justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header header-dark"> 
                        <span class="login-logo fas fa-user float-left text-red pt-2"></span>
                        <span class="page-title float-right">{{__('G3T SIP Register')}}</span>
                    </div>

                    <div class="card-body register-card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row0">
                                <div class="input-group mb-3">
                                    <input 
                                    id="name" 
                                    type="text" 
                                    class="form-control @error('name') is-invalid @enderror" 
                                    name="name" 
                                    value="{{ old('name') }}" 
                                    required 
                                    autocomplete="name" 
                                    autofocus
                                    placeholder="Name"
                                    >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                        </div>
                                    </div>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row0">
                               

                                <div class=" input-group mb-3">
                                    <input 
                                    id="email" 
                                    type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    name="email" value="{{ old('email') }}" 
                                    required 
                                    autocomplete="email"
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
                                    autocomplete="new-password"
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

                            <div class="form-group row0">
                               

                                <div class="input-group mb-3">
                                    <input 
                                    id="password-confirm" 
                                    type="password" 
                                    class="form-control" 
                                    name="password_confirmation" 
                                    required 
                                    autocomplete="new-password"
                                    placeholder="Retype-password"
                                    >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                </div>
                                </div>
                                
                            </div>

                            <div class="form-group row0 mb-0 mt-4">
                                <div class="">
                                    <button type="submit" class="btn btn-secondary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                                 
                            </div>
                            <div class="mb-4 float-right">
                               <a   href="{{ route('login') }}" class="text-center">Already Registered?</a>
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
