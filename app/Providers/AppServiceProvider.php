<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\Language as MiddlewareLanguage;
use App\Models\Language;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        if (Schema::hasTable('languages')) {
            $languages = Language::query()->pluck('code')->toArray();
            MiddlewareLanguage::$all_languages = $languages;
        } else
            MiddlewareLanguage::$all_languages = [];
    }
}
