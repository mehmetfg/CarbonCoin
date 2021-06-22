<?php

namespace App\Providers;
use App\Models\Token;
use App\Models\Vallet;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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

        // Santraller

        View::composer(['power_stations.fields'], function ($view) {
            $valletItems = Vallet::doesnthave('powerStation')->sortByNameDesc()->pluck('name','id')->toArray();
            $view->with('valletItems', $valletItems);
        });

        // Cüzdanlar
        View::composer(['vallets.fields'], function ($view) {
            $tokenItems = Token::sortByNameDesc()->pluck('name','id')->toArray();
            $view->with('tokenItems', $tokenItems);
        });

        // İşlemler
        View::composer(['customer.crypto-transfer'], function ($view) {
            $tokenItems = Token::sortByNameDesc()->get(['name', 'id']);
            $view->with('tokenItems', $tokenItems);
        });
        //
    }
}
