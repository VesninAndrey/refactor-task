<?php

declare(strict_types=1);

namespace App\Sender;

use App\Dto\ClientDto;
use App\Sender\Response\SenderResponseInterface;

/**
 * Interface SenderInterface
 */
interface SenderInterface
{
    /**
     * Send data to CRM
     *
     * @param ClientDto $dto
     *
     * @return SenderResponseInterface
     */
    public function send(ClientDto $dto): SenderResponseInterface;
}