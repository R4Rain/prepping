@extends('layouts.app')

@section('title',  Auth::user()->name)

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    <div class="container px-2 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-auto">
                <img src="{{url('images/user-default.png')}}" alt="" class="rounded-circle" style="width: 100%; max-width: 200px; height: 200px; object-fit: cover;">
            </div>
            <div class="col ms-3">
                <div class="container mt-2">
                    <form action="/profile/edit" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="input-profile-name" class="form-label">Name</label>
                            <input id="input-profile-name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name" name="name" value="{{(old('name')) ? old('name') : Auth::user()->name }}" autocomplete="name">
                            @error('name')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="input-profile-email" class="form-label">Email</label>
                            <input id="input-profile-email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email address" name="email" value="{{(old('email')) ? old('email') : Auth::user()->email}}" autocomplete="email">
                            @error('email')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="input-profile-org-password" class="form-label">Original Password *</label>
                            <input id="input-profile-org-password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Require to update any field" name="password">
                            @error('password')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </div>
                            @enderror
                        </div>
                        @error('session')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </div>
                        @enderror
                        <button class="btn btn-primary px-3 py-2 me-1" type="submit">Save</button>
                        <a href="/profile" class="btn btn-danger px-3 py-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
