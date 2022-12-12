@extends('layouts.app')

@section('title', 'Home')

@section('navbar')
    @include('components.navbar', [
        'title' => 'Home'
    ])
@endsection

@section('content')
    @include('components.header')
    @include('components.footer')
@endsection
