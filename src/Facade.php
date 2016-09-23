<?php

namespace LucasRuroken\FontAwesome;

/**
 * Class Facade
 * @package LucasRuroken\FontAwesome
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