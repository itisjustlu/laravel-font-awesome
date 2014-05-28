<?php namespace Digbang\FontAwesome;
use Illuminate\Support\ServiceProvider;

/**
 * Class FontAwesomeServiceProvider
 * @package Digbang\FontAwesome
 */
class FontAwesomeServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->package('digbang/font-awesome');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('font-awesome', 'Digbang\FontAwesome\FontAwesome');
	}
}