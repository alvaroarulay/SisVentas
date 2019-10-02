@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <h1>Registrate!</h1>
                    <p class="text-muted">Crea tu Cuenta</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="icon-user"></i>
                        </span>
                        </div>
                        <input id="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror" name="usuario" value="{{ old('usuario') }}" required autocomplete="usuario" autofocus placeholder="Nombre de Usuario">

                                @error('usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                        </div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="icon-lock"></i>
                        </span>
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="icon-lock"></i>
                        </span>
                        </div>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repite tu contraseña">
                    </div>
                    <button class="btn btn-block btn-success" type="submit">Crear Cuenta</button>
                    </form>
                </div>
                <div class="card-footer p-4">
                <div class="row">
                <div class="col-6">
                <button class="btn btn-block btn-facebook" type="button">
                <span>facebook</span>
                </button>
                </div>
                <div class="col-6">
                <button class="btn btn-block btn-twitter" type="button">
                <span>twitter</span>
                </button>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
