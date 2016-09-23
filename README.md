LucasRuroken\FontAwesome
========================

Helper class to create FontAwesome icons with a predefined markup. Bassed on Digbang\FontAwesome

**This package allows to create a facade in your laravel application. But if you want, you can use this package without laravel**

Usage
-----

### Basic usage

```php
$fa = new FontAwesome();
$fa->icon('icon', ['class' => 'extra-class'])
```

### Basic usage Laravel 5.*
```php
FontAwesome::icon('icon', ['class' => 'extra-class'])
```


Would result in...

```html
<i class="fa fa-icon extra-class"></i>
```

### HTML Attributes

You can also add any other attributes to the html.
Doing...

```php
$fa->icon('times', ['title' => 'Delete this!'])
```

would result in...

```html
<i class="fa fa-times" title="Delete this!"></i>
```

### Changing the tag

You can change the tag used by the library.
Doing...

```php
$fa->setTag('span');
$fa->icon('edit');
```

would result in...

```html
<span class="fa fa-edit"></span>
```

Laravel
-------

Add the service provider and facade to your `config/app.php` file:

```php
'providers' => array(
	...
	'LucasRuroken\FontAwesome\FontAwesomeServiceProvider',
	...
);
```

And add the class alias, so you can call it like `\FontAwesome::icon`

```php
'aliases' => array(
	...
	'FontAwesome' => 'LucasRuroken\FontAwesome\Facade',
	...
);
```
