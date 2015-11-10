<?php

namespace directapi\exceptions;


class RequestValidationException extends DirectApiException
{
    public function __construct(array $errors)
    {
        parent::__construct($this->getErrorsAsString($errors), 1, null);
    }

    private function getErrorsAsString($errors)
    {
        $text = '';
        foreach ($errors as $key => $error) {
            $this->getValue($text, $key, $error);
        }
        return $text;
    }

    private function getValue(&$text, $key, $error)
    {
        if (is_array($error)) {
            foreach ($error as $errorKey => $value) {
                $fullKey = $key . '.' . $errorKey;
                $this->getValue($text, $fullKey, $value);
            }
        } else {
            $text .= $key . ': ' . $error . PHP_EOL;
        }
    }
}