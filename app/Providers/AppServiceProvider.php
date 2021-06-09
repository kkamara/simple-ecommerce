<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use \App\Models\Cart;


class AppServiceProvider extends ServiceProvider
{
    /**
     * @param String $name
     * @return Function
     */
    private static function renderViewComposer($name) {
        return match($name) {
            'cartCount' => function($view) {
                $view->with('cartCount', Cart::count());
            },
            'cartPrice' => function($view) {
                $view->with('cartPrice', Cart::price());
            },
        };
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Paginator::useBootstrap();

        /** @var Array[string] $cartCountViewFiles */
        $cartCountViewFiles = [
            'order_history.create',
            'layouts.navbar',
            'cart.show',
        ];
        view()->composer($cartCountViewFiles, self::renderViewComposer('cartCount'));

        /** @var Array[string] $cartPriceViewFiles */
        $cartPriceViewFiles = ['cart.show', 'order_history.create'];
        view()->composer($cartPriceViewFiles, self::renderViewComposer('cartPrice'));
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
