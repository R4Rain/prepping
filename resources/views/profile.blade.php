<x-app title="Profile">
    <x-navbar></x-navbar>

    <div class="container-lg p-5">
        <div class="row">
            <div class="col-4">
                <x-sidebar></x-sidebar>
            </div>
            <div class="col">
                <div class="card border-0 bg-white shadow-sm rounded-4">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-3">
                                <img src="/storage/users/{{ auth()->user()->photo }}" width="100%"
                                    class="rounded-circle">
                            </div>
                            <div class="col">
                                <h4>{{ auth()->user()->name }}</h4>
                                <p class="text-muted">{{ auth()->user()->email }}</p>
                                <button type="button" class="btn btn-outline-light rounded-3" data-bs-toggle="modal"
                                    data-bs-target="#edit-profile">
                                    Edit profile
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-profile" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content border-0 rounded-4">
                <div class="modal-body p-5">
                    <h4 class="mb-4 text-center">Edit Profile</h4>

                    <form method="POST" action="{{ route('profile.update', auth()->user()) }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ auth()->user()->name }}" required>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="photo" class="form-label">{{ __('Profile Picture') }}</label>
                            <input class="form-control" type="file" id="photo" name="photo">

                            @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        @method('PUT')
                        <button type="submit" class="btn btn-primary w-100">
                            {{ __('Save') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>
