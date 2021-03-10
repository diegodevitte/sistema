@extends('layout_login.app')

@section('content')
<div class="container h-100">
  <div class="d-flex justify-content-center h-100">
    <div class="user_card">
      <div class="d-flex justify-content-center">
        <div class="brand_logo_container">
          <img src="img/logo.png" class="brand_logo" alt="Logo">
        </div>
      </div>
      <div class="d-flex justify-content-center form_container">
        <form>

          <div class="input-group mb-3">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electrónico">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>

          <div class="input-group mb-2">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

            <div class="d-flex justify-content-center mt-3 login_container">
              <button type="button" name="button" class="btn login_btn">Iniciar Sesión</button>
            </div>
          </form>
        </div>

        <div class="mt-4">
          <div class="pass_btn">
            @if (Route::has('password.request'))
              <a class="d-flex justify-content-center pass_btn" href="{{ route('password.request') }}">
                ¿Olvidaste tu contraseña?
              </a>
            @endif
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection
