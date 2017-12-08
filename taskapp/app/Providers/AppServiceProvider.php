<?php

namespace App\Providers;

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
 view() ->share('name', 'specification and dempstration');
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
