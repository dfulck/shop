<?php

namespace App\Providers;

use App\Models\brand;
use App\Models\category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('client.*',function ($view){
            $view->with([
                'brands'=>brand::all(),
                'categories'=>category::query()->where('category_id',1)->get(),
                ]);
        });
        view()->composer('Admin.*',function ($view){
           $view->with([
               'user'=>auth()->user()
           ]);
        });
    }
}
