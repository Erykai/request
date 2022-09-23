# Request
[![Maintainer](http://img.shields.io/badge/maintainer-@alexdeovidal-blue.svg?style=flat-square)](https://instagram.com/alexdeovidal)
[![Source Code](http://img.shields.io/badge/source-erykai/request-blue.svg?style=flat-square)](https://github.com/erykai/request)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/erykai/request.svg?style=flat-square)](https://packagist.org/packages/erykai/request)
[![Latest Version](https://img.shields.io/github/release/erykai/request.svg?style=flat-square)](https://github.com/erykai/request/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Quality Score](https://img.shields.io/scrutinizer/g/erykai/request.svg?style=flat-square)](https://scrutinizer-ci.com/g/erykai/request)
[![Total Downloads](https://img.shields.io/packagist/dt/erykai/request.svg?style=flat-square)](https://packagist.org/packages/erykai/request)

Receives INPUT_POST requests, php://input and query converts and returns in object


## Installation

Composer:

```bash
"erykai/request": "1.2.*"
```

Terminal

```bash
composer require erykai/request
```

Create file.php

```php
use Erykai\Request\Request;

require "vendor/autoload.php";
//$data = $data['query'] example ?name=tal&order=ASC or NULL
//$request = new Request($data);
$request = new Request();
print_r($request->response());
```

## Contribution

All contributions will be analyzed, if you make more than one change, make the commit one by one.

## Support


If you find faults send an email reporting to webav.com.br@gmail.com.

## Credits

- [Alex de O. Vidal](https://github.com/alexdeovidal) (Developer)
- [All contributions](https://github.com/erykai/request/contributors) (Contributors)

## License

The MIT License (MIT). Please see [License](https://github.com/erykai/request/LICENSE) for more information.
