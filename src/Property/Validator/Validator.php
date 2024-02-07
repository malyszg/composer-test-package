<?php

namespace Property\Validator;

class Validator implements ValidatorInterface
{
    private $params = [];

    /**
     * @param array $params
     */
    public function __construct(array $params)
    {
        $this->params = $params;
    }

    public function validate(): bool
    {
        return true;
    }

}