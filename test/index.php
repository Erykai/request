<?php


use Erykai\Request\Request;

require "vendor/autoload.php";
//$data = $data['query'] example ?name=tal&order=ASC or NULL
//$request = new Request($data);
$request = new Request();
print_r($request->response());