<!DOCTYPE html>
<html lang="{{ config('localization.locale_lang.' . app()->getLocale()) }}">
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
        <p>{{ __('page.hello_world') }}</p>
    </div>
    <ul class="drop-down closed">
        <li style="cursor: pointer">
            <p class="nav-button">Change Language</p>
        </li>
        @foreach(config('localization.locales') as $locale)
            <li data-locale="{{ $locale }}" class="ss-change-locale">
                <a href="javascript:void(0)">
                    {{ __('page.locales.name.' . $locale) }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>

<script src="{{ asset('scripts.js') }}"></script>
<script>
    // SWITCH LANGUAGE
    var currentUri = window.location.pathname;
    var locales = "{{ implode('|', config('localization.locales')) }}";
    var currentLocale = "{{ app()->getLocale() }}";
    var elements = document.querySelectorAll('.ss-change-locale');
    for (let i = 0; i < elements.length; i++) {
        elements[i].addEventListener('click', function () {
            let locale = this.getAttribute('data-locale');
            if (locale === currentLocale) {
                return;
            }
            let newUri = currentUri.replace(new RegExp('^\/(' + locales + ')'), '/' + locale);
            let paramsIndex = window.location.href.indexOf('?');
            let params = (paramsIndex !== -1 ? window.location.href.slice(paramsIndex) : '')
            let port = window.location.port ? ':' + window.location.port : '';
            window.location.href = window.location.protocol + '//' + window.location.hostname + port + newUri + params;
        });
    }
</script>

</body>
</html>
