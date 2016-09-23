<?php

namespace LucasRuroken\FontAwesome;

use Illuminate\Support\ServiceProvider;

/**
 * Class FontAwesomeServiceProvider
 * @package Digbang\FontAwesome
 */
class FontAwesomeServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->package('lucasruroken/laravel-font-awesome');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('font-awesome', 'LucasRuroken\FontAwesome\FontAwesome');
	}
}