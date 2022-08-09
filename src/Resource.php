<?php

namespace Erykai\Request;

/**
 * Resource Request
 */
class Resource
{
    /**
     * @var object
     */
    private object $data;
    /**
     * @var string|null
     */
    private ?string $error = null;
    /**
     * @var object|null
     */
    private ?object $query = null;

    /**
     * checks if there are requests and converts it to an object
     */
    public function __construct(?array $data = null)
    {
        $this->setData();
        $this->setQuery($data);
    }

    /**
     * @return object
     */
    protected function getData(): object
    {
        return $this->data;
    }

    /**
     * checks if there are requests and converts it to an object
     */
    private function setData(): void
    {
        $this->data = (object)filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (count(get_object_vars($this->data)) === 0) {
            try {
                $this->data = json_decode(file_get_contents('php://input'), false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                $this->setError("json php://input {$e->getMessage()} - {$e->getFile()} - {$e->getLine()}");
            }
        }
    }
    /**
     * @return object|null
     */
    protected function getQuery(): ?object
    {
        return $this->query;
    }

    /**
     * @param array|null $data
     * @return bool
     */
    protected function setQuery(?array $data): bool
    {
        if (!empty($data['query'])) {
            $this->query = (object)filter_var_array($data['query'], FILTER_DEFAULT);
            return true;
        }
        $this->query = null;
        return false;
    }

    /**
     * @return string|null
     */
    protected function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @param string|null $error
     */
    protected function setError(?string $error): void
    {
        $this->error = $error;
    }
}