<?php namespace Digbang\FontAwesome;

/**
 * Class Facade
 * @package Digbang\FontAwesome
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
	protected static function getFacadeAccessor()
	{
		return 'font-awesome';
	}
}