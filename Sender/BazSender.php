<?php

declare(strict_types=1);

namespace App\Sender;

use App\Dto\ClientDto;
use App\Sender\Response\SenderResponse;
use App\Sender\Response\SenderResponseInterface;

/**
 * Class BazSender
 */
class BazSender extends Sender
{
    /**
     * @inheritdoc
     */
    private array $validationRules = [
        'user'     => 'required',
        'password' => 'required',
    ];

    /**
     * Sends data to the Baz crm
     *
     * @param ClientDto $dto
     *
     * @return SenderResponseInterface
     */
    public function send(ClientDto $dto): SenderResponseInterface
    {
        //@todo Do not implement a logic for send specifically. Imagine that it's here.

        $response = new SenderResponse();
        $response->setStatusCode(200);

        return $response;
    }
}
