# Laravel Socialite Helmholtz AAI provider

This is a Laravel Socialite provider for Helmholtz AAI.

## Installation

Install the package:
```bash
composer require biigle/laravel-socialite-haai
```

Add the entry to `config/services.php`:
```php
'haai' => [
  'client_id' => env('HAAI_CLIENT_ID'),
  'client_secret' => env('HAAI_CLIENT_SECRET'),
  'redirect' => env('HAAI_REDIRECT_URI'),
],
```

## Usage

You should now be able to use the provider like you would regularly use Socialite (assuming you have the facade installed):

```php
return Socialite::driver('haai')->redirect();
```

### Returned User Fields

- ``id``
- ``name``
- ``given_name``
- ``family_name``
- ``email``
