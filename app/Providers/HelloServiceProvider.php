<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Validator;
use App\Http\Validators\HelloValidator;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $validator = $this->app['validator'];
        $validator->resolver(function($translator, $data, $rules, $messages) {
            return new HelloValidator($translator, $data, $rules, $messages);
        });
        /* １つのコントローラでしか使わない検証の場合、こういう書き方もあり（手軽）
        Validator::extend('hello', function($attribute, $value, $parameters, $validator) {
            return $value % 2 == 0;
        });
        */
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
