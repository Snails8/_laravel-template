<?php

namespace App\Providers;

use App\Services\SampleService;
use App\Services\UtilityService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * ここにServiceを記述しbindし、app.php内のprovidersに追記することでServiceContainer内に保存ことができる
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // bindによって毎回異なるインスタンスを作成する
        $this->app->bind('utility', UtilityService::class);
        $this->app->bind('sample', SampleService::class);

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
