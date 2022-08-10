<?php

namespace Erykai\Request;

/**
 * Class receives INPUT_POST requests, php://input and query converts and returns in object
 */
class Request extends Resource
{
    /**
     * @return object
     */
    public function response(): object
    {
        return $this->getResponse();
    }
}