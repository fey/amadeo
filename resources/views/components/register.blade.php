<div class="tab-pane fade show" id="pills-registr" role="tabpanel" aria-labelledby="pills-registr-tab">
  <h2 class="text-center">Регистрация</h2>
  <div class="pt-3">
    <form method="POST" action="{{ route('register') }}">
      @csrf

      <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
            value="{{ old('name') }}" required autocomplete="name" autofocus>

          @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email">

          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" required autocomplete="new-password">

          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
            autocomplete="new-password">
        </div>
      </div>

      <div class="form-group row">
        <div class="col-md-7 offset-md-3">
          <!-- добавление элемента div -->
          <div class="text-center">
            <div class="g-recaptcha" style="display: inline-block" data-sitekey="6KepjAsTFFFFFFMqccY0ZiGqc3TEd3YVxo8cHsGX"></div>
            <!-- элемент для вывода ошибок -->
            <div class="text-danger" id="recaptchaError"></div>
            <!-- js-скрипт гугл капчи -->
            <script src='https://www.google.com/recaptcha/api.js'></script>
          </div>
        </div>

      </div>
      <div class="form-group row md-0">
            <div class="form-check col-md-6 offset-md-4">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                - подписаться на рассылку новостей портала Amadeo.
              </label>
            </div>
          </div>
          <div class="form-group row md-0">
            <div class="form-check col-md-6 offset-md-4">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                - согласен(а) с правилами сервера.
              </label>
            </div>
          </div>
      <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
          <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
