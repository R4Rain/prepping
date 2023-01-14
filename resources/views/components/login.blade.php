<div class="modal fade" id="login" {{ Request::is('login') ? 'data-bs-backdrop=static data-bs-keyboard=false' : '' }}
    tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content border-0 rounded-4">
            <div class="modal-body p-5">
                <div class="text-center mb-4">
                    <a href="{{ route('home') }}">
                        <img src="/storage/assets/logo.png" alt="Prepping" width="40" class="mb-3">
                    </a>
                    <h4>Login</h4>
                    <small class="text-muted">Don't have an account yet? <a role="button" data-bs-target="#register"
                            data-bs-toggle="modal" class="text-decoration-none">Sign up now</a></small>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control" name="email"
                            value="{{ old('email') }}" required>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control" name="password" required>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100 rounded-3">
                        {{ __('Login') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
