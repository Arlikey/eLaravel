<?php

namespace App\Providers;

use App\Models\Category;
use App\View\Components\successMessage;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrapFive();
        Blade::component('message.success', successMessage::class);

        View::share('categories_share', Category::all());

        Blade::directive('admin', function ($expression) {
            return "<?php if (auth()->check() && auth()->user()->IsAdmin()) : ?> {$expression}";
        });

        Blade::directive('endadmin', function ($expression) {
            return "<?php endif; ?>";
        });
    }
}
