@extends('layouts.app')

@section('title', "My Recipe")

@section('navbar')
    @include('components.navbar', [
        'title' => "My Recipe"
    ])
@endsection

@section('content')
    <div class="container my-5">
        <div class="row">
            <h1 class="text-center">Your recipes</h1>
        </div>
        <div class="row">
            @foreach ($recipes as $recipe)
                @include('components.recipe_card')
            @endforeach
        </div>
    </div>
@endsection