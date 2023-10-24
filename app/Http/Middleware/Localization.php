<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class Localization
{
    public function handle(Request $request, Closure $next)
    {
        $first_segment = $request->segment(1);
        if (in_array($first_segment, config('localization.locales'))) {
            App::setLocale($first_segment);
            URL::defaults(['locale' => $first_segment]);

            return $next($request);
        } else {
            $fallback_locale = config('app.fallback_locale');
            $segments = $request->segments();
            array_unshift($segments, $fallback_locale);

            return Redirect::to(implode('/', $segments));
        }
    }
}
