<?php


use Erykai\Request\Request;

require "vendor/autoload.php";
//$data = $data['query'] example ?name=tal&order=ASC or NULL
$request = new Request($data);

if($request->error()){
    echo $request->error();
    return false;
}

print_r($request->reponse());