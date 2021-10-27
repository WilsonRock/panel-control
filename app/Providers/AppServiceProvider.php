<?php

namespace App\Providers;

use App\Sortable;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
	public function boot(UrlGenerator $url)
	{
	   if (env('REDIRECT_HTTPS')) {
		   $url->formatScheme('https://');
	   }
	}

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
		if (env('REDIRECT_HTTPS')) {
		   $this->app['request']->server->set('HTTPS', true);
	    }
    }
}
