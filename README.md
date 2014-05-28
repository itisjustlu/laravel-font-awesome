Digbang/FontAwesome
===================

Helper class to create FontAwesome icons with a predefined markup.

Usage
-----

Calling...

```php
	FontAwesome::icon('icon', 'extra-class')
	// or...
	FontAwesome::icon('icon', ['class' => 'extra-class'])
```

Would result in...

```html
	<i class="fa fa-icon extra-class"></i>
```

You can also add any other attributes to the html

```php
	FontAwesome::icon('times', ['title' => 'Delete this!'])
```

would result in...

```html
	<i class="fa fa-times" title="Delete this!"></i>
```

Also, you can change the tag used by the library

```php
	FontAwesome::setTag('span');
	FontAwesome::icon('edit');
```

would result in...

```html
	<span class="fa fa-edit"></span>
```

Laravel
-------

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
