<?php

declare(strict_types=1);

namespace App;

use App\Dto\ClientDto;
use App\Sender\Response\SenderResponseInterface;
use App\Sender\SenderInterface;

/**
 * Class CrmManager
 */
class CrmManager
{
    /**
     * @var SenderInterface
     */
    private SenderInterface $client;

    /**
     * CrmManager constructor.
     *
     * @param SenderInterface $client
     */
    public function __construct(SenderInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Sends the person to a crm
     *
     * @param ClientDto $clientEntity
     *
     * @return SenderResponseInterface
     */
    public function sendPerson(ClientDto $clientEntity): SenderResponseInterface
    {
        return $this->client->send($clientEntity);
    }
}
