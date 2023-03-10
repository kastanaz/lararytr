# LARATYR

This package wrapper for Rytr API https://rytr.me.

## Installation

You can install the package via composer:

Add git source repository to `composer.json`:
```
"repositories": [
    {
        "type": "vcs",
        "url": "https://git.rakhasa.com/arnal/lararytr.git"
    }
],
```
Start installing the package:
```bash
composer require rakhasa/lararytr
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="lararytr-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="lararytr-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="lararytr-views"
```

## Usage

**Get Languages**
```php
$lararytr = new Rakhasa\Lararytr\Lararytr(config('services.rytr.api_key'));
$lararytr->getLanguages();
```

**Get Tones**
```php
$lararytr = new Rakhasa\Lararytr\Lararytr(config('services.rytr.api_key'));
$lararytr->getTones();
```

**Get Use Cases**
```php
$lararytr = new Rakhasa\Lararytr\Lararytr(config('services.rytr.api_key'));
$lararytr->getUseCases();
```

**Get Use Detail Case**
```php
$lararytr = new Rakhasa\Lararytr\Lararytr(config('services.rytr.api_key'));
$lararytr->getUseCase('USE_CASE_ID');
```

**Generate Content**
```php
$payload = [
    'languageId' => "<LANUGAGE ID>",
    'toneId' => "<TONE ID>",
    'useCaseId' => "<USE CASE ID>",
    'inputContexts' => [
        "<USE-CASE CONTEXT-INPUT KEY-LABEL>": "<VALUE>"
    ],
    'variations' => 1, 
    'userId' => '<UNIQUE USER ID>',  // Usually primary user id in your database
    'format' => 'html', 
    'creativityLevel' => 'default'
];
$lararytr = new Rakhasa\Lararytr\Lararytr(config('services.rytr.api_key'));
$lararytr->generateContent($payload);
```

**Get Usage**
```php
$lararytr = new Rakhasa\Lararytr\Lararytr(config('services.rytr.api_key'));
$lararytr->getUsage();
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ahmat Arnal Kastana](https://github.com/arnal)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
