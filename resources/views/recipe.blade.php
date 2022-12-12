@extends('layouts.app')

@section('title', $recipe->title)

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    <div class="container px-2 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5">
            <img src="
                @if ($recipe->image)
                    {{asset('storage/'.$recipe->image)}}
                @else
                    {{url('images/no-image.jpg')}}
                @endif
            " alt="" style="width: 100%; max-width: 300px; height: 300px; object-fit: cover;">
            <div class="col ms-3">
                <h1 class="fw-bold">{{$recipe->title}}</h1>
                <h4 class="text-muted fw-bold">{{$recipe->user->name}}</h4>
                <div>
                    @if ($reviews->isEmpty())
                        <span class="me-2">No reviews</span>
                    @else
                        <x-star :rate="$average_reviews"></x-star>
                    @endif
                    <a class="text-dark" href="#reviews-accordion">See all reviews</a>
                    <span class="ms-3">
                        <i class="bi bi-clock-history text-custom-green"></i>
                        <span class="ms-1">{{$recipe->duration}}</span>
                    </span>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="accordion" id="description-accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="description-header">
                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#description-collapse" aria-expanded="true" aria-controls="description-collapse">
                        Description
                    </button>
                    </h2>
                    <div id="description-collapse" class="accordion-collapse collapse show" aria-labelledby="description-header" data-bs-parent="description-accordion">
                        <div class="accordion-body">
                           {{$recipe->description}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="accordion" id="ingredients-accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="ingredients-header">
                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#ingredients-collapse" aria-expanded="true" aria-controls="ingredients-collapse">
                        Ingredients
                    </button>
                    </h2>
                    <div id="ingredients-collapse" class="accordion-collapse collapse show" aria-labelledby="ingredients-header" data-bs-parent="ingredients-accordion">
                        <div class="accordion-body">
                            {{$recipe->ingredients}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="accordion" id="methods-accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="methods-header">
                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#methods-collapse" aria-expanded="true" aria-controls="methods-collapse">
                        Methods
                    </button>
                    </h2>
                    <div id="methods-collapse" class="accordion-collapse collapse show" aria-labelledby="methods-header" data-bs-parent="methods-accordion">
                        <div class="accordion-body">
                            {{$recipe->methods}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="accordion" id="reviews-accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="reviews-header">
                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#reviews-collapse" aria-expanded="true" aria-controls="reviews-collapse">
                        Reviews
                    </button>
                    </h2>
                    <div id="reviews-collapse" class="accordion-collapse collapse show" aria-labelledby="reviews-header" data-bs-parent="reviews-accordion">
                        <div class="accordion-body">
                            <div class="text text-primary fw-bold mb-3">Your review</div>
                            @if($user_review)
                                @if(request('edit'))
                                    <form action="{{$recipe->id}}/reviews/{{$user_review->id}}/edit" method="POST">
                                        @csrf
                                        <div class="container mb-3">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <img
                                                    class="rounded-circle"
                                                    src="
                                                    @if (Auth::user()->image)
                                                        {{asset('storage/'.Auth::user()->image)}}
                                                    @else
                                                        {{url('images/user-default.png')}}
                                                    @endif
                                                    " alt="" style="width: 50px; height: 50px;object-fit: cover;"
                                                    >
                                                </div>
                                                <div class="col">
                                                    <textarea 
                                                        class="form-control" 
                                                        aria-label="With textarea" 
                                                        style="height: 100px; resize: none;"
                                                        placeholder="Write a comment here..."
                                                        name="comment"
                                                    >{{$user_review->comment}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row d-flex align-items-center justify-content-end mt-3 ms-5"> 
                                                    <div class="col ms-3">
                                                        @guest
                                                            <span class="text-primary">
                                                                <a class="fw-bold" href="/login">Login first to give a review!</a>
                                                            </span>
                                                        @endguest
                                                        @error('rate')
                                                            <span class="text-danger" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                <div class="col-auto d-flex">
                                                    <span class="me-2 text-secondary fw-bold">Rating</span>
                                                    <x-rating :rate="$user_review->rate"></x-rating>
                                                </div>
                                                <div class="col-auto">
                                                    <a class="btn btn-danger" href="/recipes/{{$recipe->id}}" role="button">Cancel</a>
                                                    <button type="submit" @guest disabled @endguest class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <div class="container py-2 bg-info bg-opacity-10 border border-primary rounded">
                                        <x-review :review="$user_review" :recipe="$recipe" :current="1"></x-review>
                                    </div>
                                @endif
                            @else
                                <form action="{{$recipe->id}}/reviews" method="POST">
                                    @csrf
                                    <div class="container mb-3">
                                        <div class="row">
                                            <div class="col-auto">
                                                @auth
                                                    <img
                                                    class="rounded-circle"
                                                    src="
                                                    @if (Auth::user()->image)
                                                        {{asset('storage/'.Auth::user()->image)}}
                                                    @else
                                                        {{url('images/user-default.png')}}
                                                    @endif
                                                    " alt="" style="width: 50px; height: 50px;object-fit: cover;"
                                                    >
                                                @else
                                                    <i class="bi bi-person-circle text-primary" style="font-size: 50px;"></i>
                                                @endauth
                                            </div>
                                            <div class="col">
                                                <textarea 
                                                    class="form-control" 
                                                    aria-label="With textarea" 
                                                    style="height: 100px; resize: none;"
                                                    placeholder="Write a comment here..."
                                                    name="comment"
                                                ></textarea>
                                            </div>
                                        </div>
                                        <div class="row d-flex align-items-center justify-content-end mt-3 ms-5"> 
                                                <div class="col ms-3">
                                                    @guest
                                                        <span class="text-primary">
                                                            <a class="fw-bold" href="/login">Login first to give a review!</a>
                                                        </span>
                                                    @endguest
                                                    @error('rate')
                                                        <span class="text-danger" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            <div class="col-auto d-flex">
                                                <span class="me-2 text-secondary fw-bold">Rating</span>
                                                <x-rating :rate="0"></x-rating>
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" @guest disabled @endguest class="btn btn-primary">Post a review</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                        <div class="border-top"></div>
                        <div class="accordion-body">
                            <div class="text text-primary fw-bold mb-3">All reviews</div>
                            <div class="container">
                                @if ($reviews->isEmpty())
                                    <div class="text-center my-5">
                                        <div class="fs-5">There are no reviews in here..</div>
                                        <div class="fs-6 text-muted">Give a review to become the first one!</div>
                                    </div>
                                @else
                                    @foreach ($reviews as $review)
                                        <x-review :review="$review" :recipe="$recipe" current="0"></x-review>
                                    @endforeach
                                    @if ($reviews->hasPages())
                                        <div class="row mt-5">
                                            {{ $reviews->links() }}
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection