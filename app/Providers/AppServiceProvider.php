<?php

namespace App\Providers;

use Carbon\Carbon;
use Laravel\Cashier\Cashier;
use Illuminate\Support\Facades\App;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\UsersOnlineController;



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
        Paginator::useBootstrap();
        UsersOnlineController::getUsers();
       // View::share('language', App::getLocale());
        //  Carbon::setLocale('fr');
        //  // add translatedFormat(date here) in blade
        // // Cashier::calculateTaxes();


    }
}
