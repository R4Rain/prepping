<x-app title="Edit Community">
    <x-navbar></x-navbar>

    <div class="container-lg py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-5 pt-4">
                        <form method="POST" action="{{ route('communities.update', $community) }}"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="d-flex justify-content-between align-items-center bg-white py-4 mb-4 sticky-top">
                                <h4 class="m-0">
                                    <a href="{{ route('communities.show', $community) }}" class="text-dark">
                                        <i class="bi bi-arrow-left me-2"></i></a>
                                    Edit Community
                                </h4>

                                @method('PUT')
                                <button type="submit" class="btn btn-secondary rounded-3 px-4">Save</button>
                            </div>

                            <div class="container-lg px-lg-5">
                                <div class="mb-5">
                                    <h5>Community name</h5>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $community->name }}" required>

                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-5">
                                    <img src="/storage/communities/{{ $community->photo }}" id="card-img"
                                        class="rounded-3" width="100%">
                                    <img id="img-preview" class="rounded-3" width="100%" src="#" hidden>

                                    <input type="file" id="photo" name="photo" class="form-control mt-3"
                                        required>
                                </div>

                                <div class="mb-5">
                                    <h5>Description (optional)</h5>
                                    <textarea name="description" class="form-control" rows="3">{{ $community->description }}</textarea>

                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
