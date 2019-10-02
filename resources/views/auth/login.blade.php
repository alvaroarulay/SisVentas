@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group mb-0">
          <div class="card p-4">
            <div class="card-body">
              <h1>Acceder</h1>
              <p class="text-muted">Control de acceso al sistema</p>
               <form method="POST" action="{{ route('login') }}">
                        @csrf
              <div class="input-group mb-3">
                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="input-group mb-4">
                <span class="input-group-addon"><i class="icon-lock"></i></span>
                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="row">
                <div class="col-6">
                  <button type="submit" class="btn btn-primary px-4"> {{ __('Acceder') }}</button>
                </div>

                <div class="col-6 text-right">
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('lvidaste tu password?') }}
                                    </a>
                                @endif
                  
                </div>
              </div>
          </form>
            </div>
          </div>
          <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
            <div class="card-body text-center">
              <div>
                <h2>Sistema de Ventas IncanatoIT</h2>
                <p>Sistema de compras, Ventas desarrollado en PHP utilizando el Framework Laravel y Vue Js, con el gestor de base de datos MariaDB.</p>
                <a href="https://www.udemy.com/user/juan-carlos-arcila-diaz/" target="_blank" class="btn btn-primary active mt-3">Ver el curso!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
