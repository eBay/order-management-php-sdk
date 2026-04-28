<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Exceptions;

class GraphQLException extends SdkException
{
    /**
     * @param string[] $errors
     * @param int|null $httpStatusCode HTTP status code when the exception was caused by an HTTP error.
     */
    public function __construct(
        private readonly array $errors,
        private readonly ?int $httpStatusCode = null,
    ) {
        parent::__construct('GraphQL errors: ' . implode('; ', $errors));
    }

    /** @return string[] */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /** HTTP status code, or null if this was a GraphQL-layer error (not HTTP). */
    public function getHttpStatusCode(): ?int
    {
        return $this->httpStatusCode;
    }
}
