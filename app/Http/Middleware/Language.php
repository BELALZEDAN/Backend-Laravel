<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Language
{
    public static $all_languages = [];
    public static $language = 'en';
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $lang = $request->headers->get('accept-language') ?? 'en';
        if (!in_array($lang, Language::$all_languages))
            $lang = 'en';
        Language::$language = $lang;
        return $next($request);
    }

    public static function rule(array $languages = null)
    {
        return 'required_array_keys:' . implode(',', $languages ?? Language::$all_languages);
    }
}
