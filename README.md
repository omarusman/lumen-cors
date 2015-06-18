# Lumen Cors Package

[![Latest Stable Version](https://poser.pugx.org/vluzrmos/lumen-cors/v/stable)](https://packagist.org/packages/vluzrmos/lumen-cors) [![Total Downloads](https://poser.pugx.org/vluzrmos/lumen-cors/downloads)](https://packagist.org/packages/vluzrmos/lumen-cors) [![Latest Unstable Version](https://poser.pugx.org/vluzrmos/lumen-cors/v/unstable)](https://packagist.org/packages/vluzrmos/lumen-cors) [![License](https://poser.pugx.org/vluzrmos/lumen-cors/license)](https://packagist.org/packages/vluzrmos/lumen-cors)

A Simple [Cross Origin Resource Sharing](https://developer.mozilla.org/en-US/docs/Web/HTTP/Access_control_CORS) for Lumen Framework. Tested on Lumen 5.1.

# Install

```bash 
composer require vluzrmos/lumen-cors
``` 

# Configure

On <code>boostrap/app.php</code> register the service provider:

```php
$app->register('Vluzrmos\LumenCors\Providers\CorsServiceProvider');
``` 

And the middleware:

```php
$app->middleware([
	//...,
	'Vluzrmos\LumenCors\Middlewares\CorsMiddleware'
]);
```   


And that is it!

# License

[DBAD](http://www.dbad-license.org/).
