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
                    <div class="mb-3">
                        <label for="input-profile-name" class="form-label">Name</label>
                        <input type="text" class="form-control" value="{{Auth::user()->name}}" id="input-profile-name" disabled>
                    </div>
                    <div class="mb-5">
                        <label for="input-profile-email" class="form-label">Email</label>
                        <input type="text" class="form-control" value="{{Auth::user()->email}}" id="input-profile-email" disabled>
                    </div>
                    <a href="./profile/edit" class="btn btn-primary px-3 py-2">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
