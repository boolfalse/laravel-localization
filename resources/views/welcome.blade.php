<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="{{ asset('styles.css') }}" rel="stylesheet">
</head>
<body>

<nav>
    <div class="centered-text">
        <h1>Laravel Localization</h1>
        <p>Hello World</p>
    </div>
    <ul class="drop-down closed">
        <li>
            <a href="#" class="nav-button">Change Language</a>
        </li>
        <li class="#">
            <a href="#">English</a>
        </li>
        <li class="#">
            <a href="#">Chinese</a>
        </li>
    </ul>
</nav>

<script src="{{ asset('scripts.js') }}"></script>

</body>
</html>
