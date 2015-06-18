# Lumen Cors Package

A Simple [Cross Origin Resource Sharing](https://developer.mozilla.org/en-US/docs/Web/HTTP/Access_control_CORS) for Lumen Framework. Tested on Lumen 5.1.

# Install

```bash 
composer require omarusman/lumen-cors
``` 

# Configure

On <code>boostrap/app.php</code> register the service provider:

```php
$app->register('OmarUsman\LumenCors\Providers\CorsServiceProvider');
``` 

And the middleware:

```php
$app->middleware([
	//...,
	'OmarUsman\LumenCors\Middlewares\CorsMiddleware'
]);
```   


And that is it!

# License

[DBAD](http://www.dbad-license.org/).
