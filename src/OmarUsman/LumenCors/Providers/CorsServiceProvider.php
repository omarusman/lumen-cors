<?php namespace OmarUsman\LumenCors\Providers;

use Illuminate\Http\Response;
use Illuminate\Support\ServiceProvider;

class CorsServiceProvider extends ServiceProvider
{

    /**
     * Register OPTIONS route to any requests
     */
    public function register()
    {
        /** @var \Illuminate\Http\Request $request */
        $request = $this->app->make('request');

        if ($request->isMethod("options")) {
            $this->app->options("*", function () {
                return new Response('OK', 200);
            });
        }

    }
}
