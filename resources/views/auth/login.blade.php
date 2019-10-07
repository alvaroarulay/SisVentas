@extends('layouts.app')

@section('content')
<section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Ventas</h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Ingreso al Sistema</h3>
          <label class="control-label">E-mail</label>
          <div class="input-group">
            <input autofocus="" placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <label class="control-label">Contraseña</label>
          <div class="form-group">
          <input placeholder="Contraseña" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Recordarme</span>
                </label>
              </div>
              @if (Route::has('password.request'))
                  <a class="semibold-text mb-2" href="{{ route('password.request') }}" >
                      {{ __('Olvidaste tu password?') }}
                  </a>
              @endif
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Acceder</button>
          </div>
        </form>
        
    </section>
@endsection
