<?php

namespace App\Providers;

use App\Models\brand;
use App\Models\category;
use App\Models\notification;
use App\Models\product;
use App\Models\slider;
use App\Observers\BrandObserver;
use App\Observers\ProductObserver;
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
                'sliders'=>slider::all()
                ]);
        });
        view()->composer('Admin.*',function ($view){
           $view->with([
               'user'=>auth()->user(),
               'notifications'=>notification::all()
           ]);
        });

        brand::observe(BrandObserver::class);
        product::observe(ProductObserver::class);

    }
}
