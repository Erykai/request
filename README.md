# Request
Receives INPUT_POST requests, php://input and query converts and returns in object


## Installation

Composer:

```bash
"erykai/request": "1.1.*"
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
$request = new Request($data);

if($request->error()){
    echo $request->error();
    return false;
}

print_r($request->reponse());
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
