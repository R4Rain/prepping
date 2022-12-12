@extends('layouts.app')

@section('title', 'Register')

@section('navbar')
    @include('components.navbar', [
        'title' => 'Register'
    ])
@endsection

@section('content')
<div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url({{url('images/background2.jpg')}});"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3 class="fw-bold">Register</h3>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success')}}
                    </div>
                @endif
                @if (Session::get('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error')}}
                    </div>
                @endif
                <div class="form-group first mb-3">
                    <label for="name">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                      <div class="invalid-feedback" role="alert">
                          <strong>{{$message}}</strong>
                      </div>
                    @enderror
                </div>
                <div class="form-group first mb-3">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email address" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password (at least 8 characters)" name="password" required autocomplete="new-password">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group last mb-5">
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm your password"  name="password_confirmation" required autocomplete="new-password">
              </div>

              <div class="d-flex mb-5 flex-column align-items-center justify-content-center">
                <input type="submit" value="Register" class="btn btn-block btn-primary mb-3">
                <a href="login">Have an account already?</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection