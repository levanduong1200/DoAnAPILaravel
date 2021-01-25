<?php

namespace App\Providers;
use App\Helper\CartHelper;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
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
        view()->composer('*',function($view){
            $view ->with([
                'category' => Category::where('status',1)->orderBy('name','ASC')->get(),
                'cart' => new CartHelper()
            ]);
        });
    }
}
