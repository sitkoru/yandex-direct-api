<?php

namespace directapi\exceptions;


class RequestValidationException extends DirectApiException
{
    public function __construct(array $errors)
    {
        parent::__construct($this->getErrorsAsString($errors), 1, null);
    }

    private function getErrorsAsString(array $errors): string
    {
        $text = '';
        foreach ($errors as $key => $error) {
            $this->getValue($text, $key, $error);
        }
        return $text;
    }

    /**
     * @param string       $text
     * @param string       $key
     * @param string|array $error
     */
    private function getValue(string &$text, string $key, $error): void
    {
        if (\is_array($error)) {
            foreach ($error as $errorKey => $value) {
                $fullKey = $key . '.' . $errorKey;
                $this->getValue($text, $fullKey, $value);
            }
        } else {
            $text .= $key . ': ' . $error . PHP_EOL;
        }
    }
}