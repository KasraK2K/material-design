<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layouts.sidebar', function ($view) {
            $categories = \App\Category::all();
//            $categories = $categories->chunk(round($categories->count() / 2));
            $view->with(compact('categories'));
        });

        Blade::directive('tarikh', function ($time, $format='Y/m/d ساعت H:i:s') {
            return "<?php echo jdate($time)->format('$format'); ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
