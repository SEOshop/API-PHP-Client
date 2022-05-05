![Lightspeed eCom](https://developers.lightspeedhq.com/images/new_logo.png)

[![Latest Stable Version](http://img.shields.io/packagist/v/seoshop/seoshop-php.svg)](https://packagist.org/packages/seoshop/seoshop-php)
[![Latest Unstable Version](http://img.shields.io/packagist/vpre/seoshop/seoshop-php.svg)](https://packagist.org/packages/seoshop/seoshop-php)
![License](http://img.shields.io/badge/license-MIT-green.svg)

# Lightspeed eCom PHP API client
This package is a convenience wrapper to communicate with the Lightspeed eCom REST-API.


## Requirements
To use the Lightspeed eCom PHP API client, the following things are required:

+ PHP >= 5.4
+ cURL, JSON, mbstring and FileInfo PHP extensions


## Installation

By far the easiest way to install the Lightspeed eCom PHP API client is to require it with [Composer](http://getcomposer.org/doc/00-intro.md).

``` bash
$ composer require seoshop/seoshop-php:^1.9
```
```json
{
    "require": {
        "seoshop/seoshop-php": "^1.9"
    }
}
```


### Manual Installation
Obtain the latest version of the Lightspeed eCom PHP API client
``` bash
git clone https://github.com/SEOshop/API-PHP-Client
```

And include the class in your project
``` php
require_once '/path/to/lightspeed-php-sdk/src/ApiClient.php';
```

## Usage
There are a lot of API resources that are accessible through this client. You can look them up by looking at the code. Their name matches the name in the documentation.

``` php
<?php
require 'vendor/autoload.php';

$client = new \Lightspeed\ApiClient('[api-server]', '[api-key]', '[api-secret]', '[language]');

$shopInfo = $client->shop->get();
```

__Explanation__

[api-server]
Available server(-clusters): live, eu1, us1

[api-key]
The API key you've received or created

[api-secret]
The API secret you've received or created

[language]
Language shortcode that's available in the shop you're connecting to

## Fetching response headers
After making a call, you can fetch the response headers from our API server and use it to check important data such as rate limiting.

``` php
$shopInfo = $client->shop->get();
$response = $shopInfo->getResponseHeaders();
```

## Getting started
Lightspeed eCom offers a powerful set of API’s for developers to create awesome apps. The API provides developers the interface to connect with third party software such as accounting-, feedback-, e-mailmarketing- and inventory management-software, or extend with new features that interact with our core platform, such as loyalty programs, social-sharing programs or reporting tools.

Getting started with Lightspeed eCom is easy. Not a partner yet? [Please sign up as a partner](https://www.lightspeedhq.com/partners/) and claim your account details and API keys.

Read our tutorials on how to [build](http://developers.lightspeedhq.com/ecom/tutorials/build-an-app/) and [publish](http://developers.lightspeedhq.com/ecom/tutorials/publish-an-app/) your first app. Check our [introduction](http://developers.lightspeedhq.com/ecom/introduction/introduction/) to find out how to use the API

## Documentation
More documentation can be found at [developers.lightspeedhq.com/ecom](http://developers.lightspeedhq.com/ecom)

## Contributing
We love contributions, but please note that the API client is generated. If you have suggested changes, you may still create a PR, but your PR will not be merged. We will however adapt the generator to reflect your changes. You can also create a GitHub issue if there's something you miss.

## Unofficial clients for other languages
- **PHP**
    - [laravel-lightspeed-api](https://github.com/gunharth/laravel-lightspeed-api) by [Gunharth Randolf @gunharth](https://github.com/gunharth)
- **Ruby** 
    - [seoshop-api](https://github.com/YotpoLtd/seoshop-api) by [Yotpo Ltd @YotpoLtd](https://github.com/YotpoLtd)
- **Java**
    - [lightspeedecom-api](https://github.com/Falkplan/lightspeedecom-api) by [Falkplan](https://github.com/Falkplan)
