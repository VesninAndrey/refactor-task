<?php

declare(strict_types=1);

namespace App\Setting;

/**
 * Interface SettingsInterface
 */
interface SettingsInterface
{
    public function get(string $key): mixed;
}