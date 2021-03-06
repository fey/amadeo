<div class="col-sm-6 col-md-3 col-lg-2 order-1 order-md-2 pt-3" id="bg-lk">
  <div class="card-header">{{ __('Login') }}</div>

  <div class="card-body">
    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="form-group row">
        <input id="email" placeholder="{{ __('E-Mail Address') }}" type="email"
          class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
          autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="form-group row">
        <input id="password" placeholder="{{ __('Password') }}" type="password"
          class="form-control @error('password') is-invalid @enderror" name="password" required
          autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="form-group row">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" id="remember"
            {{ old('remember') ? 'checked' : '' }}>

          <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
          </label>
        </div>
      </div>

      <div class="form-group row mb-0">
        <button type="submit" class="btn btn-primary">
          {{ __('Login') }}
        </button>

        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
          {{ __('Forgot Your Password?') }}
        </a>
        @endif
      </div>
    </form>
  </div>
</div>
