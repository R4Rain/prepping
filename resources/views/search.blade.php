@extends('layouts.app')

@section('title', 'Search')

@section('navbar')
    @include('components.navbar', [
        'title' => 'Search'
    ])
@endsection

@section('content')
<form action="/search" id="search-form">
    <div class="container my-5">
        <div class="row">
            @if(request('search'))
                <h6 class="text-muted mb-1">Search result of <strong>{{request('search')}}</strong></h6>
            @endif
            <div class="input-group">
                <label class="input-group-text">
                    <i class="bi bi-search"></i>
                </label>
                <input name="search" class="form-control" type="search" value="{{request('search')}}"" placeholder="Search..">
                <button class="btn btn-success" type="submit">Search</button>
            </div>
        </div>
    </div>
    <div class="mx-4 my-2 px-3">
        <div class="row">
            <div class="col-2">
                <div class="row py-3 rounded shadow-sm">
                    <h6 class="fw-bold mb-2">Filter</h6>
                    <hr class="text-muted">
                    <div class="row">
                        <h6 class="fw-bold">Sort by</h6>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input p-1" type="radio" value="1" name="sort" id="input-recent" onchange="event.preventDefault(); document.getElementById('search-form').submit();" @if(request('sort') == 1) checked @endif>
                                <label class="form-check-label ms-2 text-muted" for="input-recent">Recently added</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input p-1" type="radio" value="2" name="sort" id="input-longest" onchange="event.preventDefault(); document.getElementById('search-form').submit();" @if(request('sort') == 2) checked @endif>
                                <label class="form-check-label ms-2 text-muted" for="input-longest">Longest duration</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input p-1" type="radio" value="3" name="sort" id="input-shortest" onchange="event.preventDefault(); document.getElementById('search-form').submit();" @if(request('sort') == 3) checked @endif>
                                <label class="form-check-label ms-2 text-muted" for="input-shortest">Shortest duration</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10">
                @if ($recipes->hasPages())
                    <div class="row">
                        <div class="col d-flex justify-content-end">
                            <span class="me-4 mt-2 align-items-center">Page {{$recipes->currentPage()}} out of {{$recipes->lastPage()}}</span>
                            {{ $recipes->links() }}
                        </div>
                    </div>
                @endif
                <div class="row">
                    @foreach ($recipes as $recipe)
                        @include('components.recipe_card')
                    @endforeach
                    @if($recipes->isEmpty())
                        <div class="col d-flex justify-content-center align-items-center pt-5">
                            <div class="row text-center text-muted">
                                <h4>No recipes found!</h4>
                                <p>Try to type other keywords</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
@endsection