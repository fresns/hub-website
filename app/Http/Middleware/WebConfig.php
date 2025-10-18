<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class WebConfig
{
    public function handle(Request $request, Closure $next)
    {
        $menus = config('app.locales', []);

        $supportedLocales = [];
        foreach ($menus as $code => $name) {
            $supportedLocales[$code] = [
                'name' => $name,
            ];
        }

        app()->get('laravellocalization')->setSupportedLocales($supportedLocales);

        $currentLocale = App::getLocale();

        $currentLocaleName = $menus[$currentLocale];

        View::share('currentLocaleName', $currentLocaleName);

        return $next($request);
    }
}
