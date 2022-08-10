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
    public function reponse(): object
    {
        return (object) [
            'data' => $this->getData(),
            'query' => $this->getQuery(),
            'argument' => $this->getArgument()
        ];
    }
    /**
     * @return string|null
     */
    public function error(): ?string
    {
        return $this->getError();
    }
}