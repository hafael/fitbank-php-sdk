<?php

namespace Hafael\Fitbank\Exceptions;

class ValidationException extends \Exception 
{
    protected array $errors;

    public function setValidationErrors($errors)
    {
        $this->errors = $errors;
        return $this;
    }

    public function getValidationErrors()
    {
        return $this->errors;
    }
}