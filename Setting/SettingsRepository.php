<?php

declare(strict_types=1);

namespace App\Setting;

/**
 * Class SettingsRepository
 */
class SettingsRepository
{
    /**
     * @param string $key
     *
     * @return SettingsInterface
     */
    public function getSettings(string $key): SettingsInterface
    {
        //@todo Not the actual code but just an example

        return new Settings(
            [
                'user'     => '',
                'password' => '',
            ]
        );
    }
}