<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Input;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
//        $contractName = input::all['tokenName'];
//        Storage::extend($contractName, function($app, $config)
//        {
//            $client = new DropboxClient($config['accessToken'], $config['clientIdentifier']);
//
//            return new Filesystem(new DropboxAdapter($client));
//        });

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
