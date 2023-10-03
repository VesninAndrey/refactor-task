<?php

declare(strict_types=1);

namespace App\Sender;

use App\Setting\SettingsInterface;
use App\Validator\HasValidationRulesInterface;

/**
 * Class Sender
 */
abstract class Sender implements SenderInterface, HasValidationRulesInterface
{
    /**
     * @var SettingsInterface
     */
    protected SettingsInterface $settings;

    /**
     * @var array
     */
    private array $validationRules = [
    ];

    /**
     * @param SettingsInterface $settings
     */
    public function setSettings(SettingsInterface $settings): void
    {
        $this->settings = $settings;
    }

    /**
     * @inheritDoc
     */
    public function getValidationRules(): array
    {
        return $this->validationRules;
    }
}