<?php

declare(strict_types=1);

namespace App\Sender\Response;

/**
 * Class SenderResponse
 */
class SenderResponse implements SenderResponseInterface
{
    private int $statusCode;

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function setStatusCode(int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }
}