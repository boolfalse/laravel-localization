
@extends('welcome')

@section('content')
    <p class="centered-text">{{ __('page.about') }}</p>

    <div class="centered-text">
        <a href="{{ route('home') }}" class="button">{{ __('page.home') }}</a>
        <a href="{{ route('contact') }}" class="button">{{ __('page.contact') }}</a>
        <a href="{{ route('dashboard') }}" class="button">{{ __('page.dashboard') }}</a>
    </div>
@endsection
