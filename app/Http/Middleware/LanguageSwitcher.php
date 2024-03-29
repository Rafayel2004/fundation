<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LanguageSwitcher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->method() === 'GET') {
            $segment = $request->segment(1);
            if (!in_array($segment, config('app.locales'))) {
                $segments = $request->segments();
//                dd($segments);
                $fallback = session('locale') ?: config('app.fallback_locale');
                $segments = Arr::prepend($segments, $fallback);

                return redirect()->to(implode('/', $segments));
            }
            session(['locale' => $segment]);
            app()->setLocale($segment);
        }

        return $next($request);
    }
}
