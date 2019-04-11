# Laravel library for Stackmash
[![Build Status](https://travis-ci.org/stackmash/stackmash-laravel.svg?branch=master)](https://travis-ci.org/stackmash/stackmash-laravel)

Stackmash - User monitoring notifications and logs. Stackmash gives you real-time notifications for any activity on your website or app, such as user sign-ups, payments, orders, errors, contact requests and more.

### Requirements
* PHP 7 and later
* The cURL extension enabled within PHP
* The JSON extension enabled within PHP

### Install with Composer

Add stackmash/stackmash-laravel as a dependency. You can either install using the command:

```bash
composer require stackmash/stackmash-laravel
```

Or, add to your composer.json file:

```json
"require": {
    ...
    "stackmash/stackmash-laravel": "^0.1.0"
    ...
}
```

and run

```bash
composer update
```

### Start using Stackmash

Get your project and create actions for that project.

```php
<?php
Stackmash::action('general', 'You have a new notification', ['Hello' => 'Stackmash!']);
```

### Documentation

<a href="https://stackmash.com/docs/installations#laravel" target="_blank">Laravel documentation</a>
For support, email <a href="mailto:support@stackmash.com">support@stackmash.com</a> or visit <a href="https://stackmash.com/support">https://stackmash.com/support</a>.