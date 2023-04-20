<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Profile;
use App\Models\User;
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
        /* Kategoriyalarni sidebarkatalog viewga jo'natish */
        View::composer('include.sidebarkatalog', function ($view) {
            $view->with([
                'data_cat' => Category::whereNull('parent_id')->get(),
                'childs' => Category::with('children')->whereNotNull('parent_id')->get(),
            ]);
        });

        view()->composer('home', function ($view) {
            $view->with([
                'productlar' => Product::all(),
                'profil' => Profile::all(),
                'user' => User::all()
            ]);
        });
    }
}
