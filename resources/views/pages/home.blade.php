
@extends('welcome')

@section('content')
    <p class="centered-text">{{ __('page.home') }}</p>

    <div class="centered-text">
        <a href="{{ route('about') }}" class="button">{{ __('page.about') }}</a>
        <a href="{{ route('contact') }}" class="button">{{ __('page.contact') }}</a>
        <a href="{{ route('dashboard') }}" class="button">{{ __('page.dashboard') }}</a>
    </div>
@endsection
