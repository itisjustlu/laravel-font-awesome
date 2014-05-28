Digbang/FontAwesome
===================

Helper class to create FontAwesome icons with a predefined markup.

##Usage

Calling...

	FontAwesome::icon('icon', 'extra-class')

Would result in...

	<i class="fa fa-icon extra-class"></i>

##Laravel

Add the service provider and facade to your `app/config/app.php` file:


	'providers' => array(
		...
		'Digbang\FontAwesome\FontAwesomeServiceProvider',
		...
	);

And add the class alias, so you can call it like `\FontAwesome::icon`

	'aliases' => array(
		...
		'FontAwesome' => 'Digbang\FontAwesome\Facade',
		...
	);
