![SEOshop](http://www.getseoshop.com/assets/gfx/seoshop-logo.min.png)

[![Latest Stable Version](http://img.shields.io/packagist/v/seoshop/seoshop-php.svg)](https://packagist.org/packages/seoshop/seoshop-php) 
![License](http://img.shields.io/badge/license-MIT-green.svg)

# SEOshop PHP API client
This package is a convenience wrapper to communicate with the SEOshop REST-API.

## Installation
For the installation of the client, there are 2 ways. The composer way is preferable, but not always possible.

### Composer
Include the package in your `composer.json` file
``` json
{
    "require": {
        "seoshop/seoshop-php": "~1.6"
    }
}
```

...then run `composer update` and load the composer autoloader:

``` php
<?php
require 'vendor/autoload.php';

// ...
```

### Manual
Obtain the latest version of the SEOshop PHP API client
``` bash
git clone https://github.com/SEOshop/API-PHP-Client
```

And include the class in your project
``` php
require_once '/path/to/WebshopappApiClient.php';
```

## Usage
There are a lot of API resources that are accessible through this client. You can look them up by looking at the code. Their name matches the name in the documentation.

``` php
<?php
require 'vendor/autoload.php';

$client = new WebshopappApiClient('live', '[your-api-key]', '[your-api-secret]', 'en');

$shopInfo = $client->shop->get();
```

## Getting started
SEOshop offers a powerful set of API’s for developers to create awesome apps. The API provides developers the interface to connect with third party software such as accounting-, feedback-, e-mailmarketing- and inventory management-software, or extend with new features that interact with our core platform, such as loyalty programs, social-sharing programs or reporting tools.

Getting started with SEOshop is easy. Not a partner yet? [Please sign up as a partner](http://www.getseoshop.com/partners/partner-signup/) and claim your account details and API keys.

Read our tutorials on how to [build](http://developers.seoshop.com/api/tutorials/build-an-app) and [publish](http://developers.seoshop.com/api/tutorials/publish-an-app) your first app. Check our [getting started guides](http://developers.seoshop.com/api/getting-started) to find out how to use the API

## Documentation
More documentation can be found at [developers.seoshop.com/api](http://developers.seoshop.com/api)

## Contributing
We love contributions, but please note that the API client is generated. If you have suggested changes, you may still create a PR, but your PR will not be merged. We will however adapt the generator to reflect your changes. You can also create a GitHub issue if there's something you miss.

## Unofficial clients for other languages
- **Ruby client** [SEOshop API client for Ruby (by Yotpo)](https://github.com/YotpoLtd/seoshop-api)
