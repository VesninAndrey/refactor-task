<?php

declare(strict_types=1);

namespace App;

use App\Sender\SenderEnum;
use App\Setting\SettingsRepository;
use App\Validator\Validator;
use InvalidArgumentException;

/**
 * Class CrmManagerBuilder
 */
class CrmManagerBuilder
{

    /**
     * @param SenderEnum $crm
     *
     * @return CrmManager
     */
    public function newCrmManager(SenderEnum $crm): CrmManager
    {
        $settingsRepository = new SettingsRepository();
        $settings = $settingsRepository->getSettings($crm->value);

        $validator = new Validator();
        $client = new ('App\\Sender\\'.$crm->value.'Sender::class');

        if (!$validator->validate($settings, $client->getValidationRules())) {
            //@todo process $validator exceptions
            throw new InvalidArgumentException("Settings must be set");
        }

        $client->setSettings($settings);

        return new CrmManager($client);
    }
}