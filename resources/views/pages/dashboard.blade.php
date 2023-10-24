
@extends('welcome')

@section('content')
    <p class="centered-text">{{ __('page.dashboard') }}</p>

    <div class="centered-text">
        <a href="{{ route('home') }}" class="button">{{ __('page.home') }}</a>
        <a href="{{ route('about') }}" class="button">{{ __('page.about') }}</a>
        <a href="{{ route('contact') }}" class="button">{{ __('page.contact') }}</a>
    </div>
@endsection
