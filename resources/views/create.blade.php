@extends('layouts.app')

@section('title', 'Create')

@section('navbar')
    @include('components.navbar', [
        'title' => 'Create'
    ])
@endsection

@section('content')
    <div class="container my-5">
        <div class="row">
            <h1>Create new recipe</h1>
        </div>
        <div class="row">
            <form method="POST" action="/create" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="input-title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="input-title" value="{{old('title')}}" placeholder="Input the title">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="input-duration" class="form-label">Duration</label>
                    <div class="input-group">
                        <input type="text" class="form-control @error('duration') is-invalid @enderror" name="duration" id="input-duration" value="{{old('duration')}}" placeholder="Input the recipe estimated duration (must be a number)">
                        <span class="input-group-text rounded-end">{{'minute(s)'}}</span>
                        @error('duration')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="input-description" class="form-label">Description</label>
                    <textarea 
                        id="input-description"
                        class="form-control @error('description') is-invalid @enderror" 
                        style="height: 120px; resize: none;"
                        placeholder="Write a description here..."
                        name="description"
                    >{{old('description')}}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="input-ingredients" class="form-label">Ingredients</label>
                    <textarea 
                        id="input-ingredients"
                        class="form-control @error('ingredients') is-invalid @enderror" 
                        style="height: 120px; resize: none;"
                        placeholder="Write the ingredients here..."
                        name="ingredients"
                    >{{old('ingredients')}}</textarea>
                    @error('ingredients')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="input-methods" class="form-label">Methods</label>
                    <textarea 
                        id="input-methods"
                        class="form-control @error('methods') is-invalid @enderror" 
                        style="height: 120px; resize: none;"
                        placeholder="Write the methods here..."
                        name="methods"
                    >{{old('methods')}}</textarea>
                    @error('methods')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="input-image" class="form-label">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="input-image">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection