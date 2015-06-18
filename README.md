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

DON'T BE A DICK PUBLIC LICENSE [Source](http://www.dbad-license.org/).
------------------------------

Version 1, December 2009

Copyright (C) 2009 Philip Sturgeon me@philsturgeon.uk

Everyone is permitted to copy and distribute verbatim or modified copies of this license document, and changing it is allowed as long as the name is changed.

DON'T BE A DICK PUBLIC LICENSE TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION

 1. Do whatever you like with the original work, just don't be a dick.

	Being a dick includes - but is not limited to - the following instances:
	
	1a. Outright copyright infringement - Don't just copy this and change the name.
	1b. Selling the unmodified original with no work done what-so-ever, that's REALLY being a dick.
	1c. Modifying the original work to contain hidden harmful content. That would make you a PROPER dick.

 2. If you become rich through modifications, related works/services, or
    supporting the original work, share the love. Only a dick would make
    loads off this work and not buy the original works creator(s) a
    pint.

 3. Code is provided with no warranty. Using somebody else's code and
    bitching when it goes wrong makes you a DONKEY dick. Fix the problem
    yourself. A non-dick would submit the fix back.
