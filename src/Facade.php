<?php namespace Digbang\FontAwesome;

/**
 * Class Facade
 * @package Digbang\FontAwesome
 * @method static string icon(string $name, array $options = [])
 * @method static setTag(string $tag)
 * @method static string getTag()
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
	protected static function getFacadeAccessor()
	{
		return 'font-awesome';
	}
}
