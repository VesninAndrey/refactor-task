<?php

declare(strict_types=1);

namespace App\Sender\Response;

/**
 * Interface SenderResponseInterface
 */
interface SenderResponseInterface
{
    /**
     * Set HTTP status code
     *
     * @param int $statusCode
     */
    public function setStatusCode(int $statusCode): void;

    /**
     * Get HTTP status code
     *
     * @return int
     */
    public function getStatusCode(): int;
}