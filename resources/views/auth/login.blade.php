<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/LOGOS BLANCO Y NEGRO/BLANCO.png" type="image/x-icon">
    <title>Ingresar</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ingresar') }}</div>
                <div class="card-body ">
                    <form method="POST" action="{{ route('login') }}" >
                        @csrf
                        <div class="row mb-3">
                            
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electronico') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ingresar') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste la contraseña??') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        {{-- --- --}}
                        {{-- <a href="{{ url('/auth/google') }}" class="btn btn-primary">
                            Iniciar sesión con Google
                        </a> --}}
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




    
</body>
</html>