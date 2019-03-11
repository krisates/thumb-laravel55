# PHPThumb for Laravel 5 (Personal version)

A simple Laravel 5 service provider for including the [PHPThumb for Laravel 4](https://github.com/mewebstudio/Thumb).

## Installation

The PHPThumb Service Provider can be installed via [Composer](http://getcomposer.org) by adding the repository and requiring the
`giovdi/laravel5-thumb` package in your project's `composer.json`. This can be done by cli with the following commands:

```
composer config repositories.thumb5 vcs https://github.com/giovdi/laravel5-thumb
composer require giovdi/laravel5-thumb
```

Update your packages with ```composer update``` or install with ```composer install```.

## Usage

**Up to Laravel 5.4**, to use the PHPThumb Service Provider, you must register the provider when bootstrapping your Laravel application. There are
essentially two ways to do this.

Find the `providers` key in `app/config/app.php` and register the PHPThumb Service Provider.

```php
    'providers' => array(
        // ...
        Mews\Thumb\ThumbServiceProvider::class
    )
```

Find the `aliases` key in `app/config/app.php`.

```php
    'aliases' => array(
        // ...
        'Thumb' => Mews\Thumb\Facades\Thumb::class
    )
```

**Since Laravel 5.5** this should be done automatically by installing the package through Composer.

## Example

```php
    //[your site path]/app/routes.php

    Route::get('/media/image/{width}x{height}/{image}', function($width, $height, $image)
    {
        $file = base_path() . '/' . $image;
        // for remote file
        //$file = 'http://i.imgur.com/1YAaAVq.jpg';
        \Thumb::create($file)->make('resize', array($width, $height))->show()->save(base_path() . '/', 'aaa.jpg');
        /*
            \Thumb::create($file)->make('resize', array($width, $height))->make('crop', array('center', $width, $height))->show();
            \Thumb::create($file)->make('resize', array($width, $height))->make('crop', array('basic', 100, 100, 300, 200))->show();
            \Thumb::create($file)->make('resize', array($width, $height))->make('resize', array($width, $height))->show();
            \Thumb::create($file)->make('resize', array($width, $height))->make('resize', array($width, $height, 'adaptive'))->save(base_path() . '/', 'aaa.jpg')->show();
            \Thumb::create($file)->make('resize', array($width, $height))->rotate(array('degree', 180))->show();
            \Thumb::create($file)->make('resize', array($width, $height))->reflection(array(40, 40, 80, true, '#a4a4a4'))->show();
            \Thumb::create($file)->make('resize', array($width, $height))->save(base_path() . '/', 'aaa.jpg');
            \Thumb::create($file)->make('resize', array($width, $height))->show();
        */

    });
```

## Links

* [PHPThumb Library website](http://phpthumb.gxdlabs.com/)

* [L4 PHPThumb on Github](https://github.com/mewebstudio/Thumb)
* [L4 PHPThumb on Packagist](https://packagist.org/packages/mews/thumb)
* [License](http://www.opensource.org/licenses/mit-license.php)
* [Laravel website](http://laravel.com)
* [Laravel Turkiye website](http://www.laravel.gen.tr)
* [MeWebStudio website](http://www.mewebstudio.com)
