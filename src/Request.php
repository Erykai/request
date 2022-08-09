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
    public function data(): object
    {
        return $this->getData();
    }

    /**
     * @return object
     */
    public function query(): object
    {
        return $this->getQuery();
    }

    /**
     * @return string
     */
    public function error(): string
    {
        return $this->getError();
    }
}