# laravel-password-reset-model

[![Latest Version on Packagist](https://img.shields.io/packagist/v/repat/laravel-password-reset-model.svg?style=flat-square)](https://packagist.org/packages/repat/laravel-password-reset-model)
[![Total Downloads](https://img.shields.io/packagist/dt/repat/laravel-password-reset-model.svg?style=flat-square)](https://packagist.org/packages/repat/laravel-password-reset-model)

**laravel-password-reset-model** contains an Eloquent model for the `password_resets` table as created by the default Larvel installation.

## Installation

`$ composer require repat/laravel-password-reset-model`

## Documentation

All fields are fillable (`$guarded = []`).

### Relationship / Attributes

If you've kept the standard FQCN for Laravels User Model (`\App\Model\User::class`) you can use the `->user` relationship or extend this model and override the `user()` method.

```php
$passwordReset = \Repat\Laravel\PasswordReset::first();

// User
$passwordReset->email;
$passwordReset->user; // App\Models\User|null based on email, extend the relationship if you have a different FQCN

$passwordReset->token; // string

$passwordReset->created_at; // \Carbon\Carbon|null
```

## License

* MIT, see [LICENSE](https://github.com/repat/laravel-password-reset-model/blob/master/LICENSE)

## Version

* Version 0.1.1

## Contact

### repat

* Homepage: [https://repat.de](https://repat.de)
* e-mail: repat@repat.de
* Twitter: [@repat123](https://twitter.com/repat123 "repat123 on twitter")

[![Flattr this git repo](http://api.flattr.com/button/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=repat&url=https://github.com/repat/laravel-password-reset-model&title=laravel-password-reset-model&language=&tags=github&category=software)
