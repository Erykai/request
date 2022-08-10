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
     * @var object|null
     */
    private ?object $query = null;
    /**
     * @var object|null
     */
    private ?object $argument = null;

    /**
     * @var string|null
     */
    private ?string $error = null;


    /**
     * checks if there are requests and converts it to an object
     */
    public function __construct(?array $data = null)
    {
        $this->setData();
        $this->setQuery($data);
        $this->setArgument($data);
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
     * @return void
     */
    private function setQuery(?array $data): void
    {
        if (!empty($data['query'])) {
            $this->query = (object)filter_var_array($data['query'], FILTER_DEFAULT);
            return;
        }
        $this->query = null;
    }

    /**
     * @return object|null
     */
    protected function getArgument(): ?object
    {
        return $this->argument;
    }

    /**
     * @param array|null $data
     * @return void
     */
    private function setArgument(?array $data): void
    {
        if (!empty($data[0])) {
            $this->argument = (object)filter_var_array($data[0], FILTER_DEFAULT);
            return;
        }
        $this->argument = null;
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