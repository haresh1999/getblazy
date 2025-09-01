<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        View::composer('layout.header', function ($view) {

            $businessTypes = DB::table('business_types')->where('language_id', 1)->where('status', 1)->get();

            $view->with([
                'businessTypes' => $businessTypes
            ]);
        });

        $location = session('location', []);

        View::share(['location' => $location]);
    }
}
