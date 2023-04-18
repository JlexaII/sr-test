<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();


        View::composer('include.header', function($view) {
            $view->with([
                'data_cat' => Category::whereNull('parent_id')->get(),
                'childs' => Category::with('children')->whereNotNull('parent_id')->get(),
            ]);
        });
    }
}
