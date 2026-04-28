<?php

namespace EBay\OrderManagement\Exceptions;

class GraphQLException extends SdkException
{
    /** @param string[] $errors */
    public function __construct(private readonly array $errors)
    {
        parent::__construct('GraphQL errors: ' . implode('; ', $errors));
    }

    /** @return string[] */
    public function getErrors(): array
    {
        return $this->errors;
    }
}
