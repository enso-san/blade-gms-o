# Blade Material Symbols (Outlined)

<a href="https://packagist.org/packages/enso-san/blade-gms-o">
    <img src="https://img.shields.io/packagist/v/enso-san/blade-gms-o" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/enso-san/blade-gms-o">
    <img src="https://img.shields.io/packagist/dt/enso-san/blade-gms-o" alt="Total Downloads">
</a>

A package to easily make use of Google's Material Symbols (Outlined) in your Laravel Blade views.  
For a full list of available icons you can preview them at [Material Symbols](https://fonts.google.com/icons).

See [https://github.com/topics/blade-gms](https://github.com/topics/blade-gms) for all available style packages.

## Requirements

- PHP 8.4 or higher
- Laravel 11.0 or higher

## Installation

As Material Symbols offers a lot of different styles, you can choose a specific one by using the corresponding package.  
See [https://github.com/topics/blade-gms](https://github.com/topics/blade-gms) for all available style packages.

```bash
composer require enso-san/blade-gms-o
```

## Enum class

For convenience, the package has an enum class for all available icon names.  
You can use the corresponding enum entries to avoid making typos and make use of IDE auto-completion.  
For example when you want to use Material Symbols in your Filament admin panel resources or pages, 
instead of writing out the string "GMS_o-shopping_cart_checkout" you can use:
```php
protected static string $navigationIcon = GMS_o::SHOPPING_CART_CHECKOUT;
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-GMS_o-home/>
```

You can also pass classes to your icon components:

```blade
<x-GMS_o-home class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-GMS_o-home style="color: #555"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-gms-o --force
```

## Configuration

Blade Material Symbols also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-gms.php` config file:

```bash
php artisan vendor:publish --tag=blade-gms-o-config
```

## Blade Icons

Blade Material Symbols uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/driesvints/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/driesvints/blade-icons#caching) with this library.

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-gms-o/home.svg') }}" width="10" height="10"/>
```

## Maintainers

Blade Material Symbols is developed and maintained by Daniel Hoffmann.

## License

Blade Material Symbols is open-sourced software licensed under [the MIT license](LICENSE.md).
