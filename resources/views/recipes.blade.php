@extends('layouts.app')

@section('title', 'Recipes')

@section('navbar')
    @include('components.navbar', [
        'title' => 'Recipes'
    ])
@endsection

@section('content')
    <div class="container my-5">
        <div class="row">
            <h1 class="text-center">Discover World Cuisine</h1>
        </div>
        <div class="row">
            @foreach ($recipes as $recipe)
                @include('components.recipe_card')
            @endforeach
        </div>
    </div>
@endsection