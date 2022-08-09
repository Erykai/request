<?php

use Erykai\Request\Resource;

require "vendor/autoload.php";
//$data = $data['query'] example ?name=tal&order=ASC or NULL
$request = new Resource($data);

if($request->error()){
    echo $request->error();
    return false;
}

print_r($request->data());
print_r($request->query());