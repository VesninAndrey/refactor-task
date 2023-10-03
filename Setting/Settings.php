<?php

declare(strict_types=1);

namespace App\Setting;

use ArrayAccess;

/**
 * Class Settings
 */
class Settings implements SettingsInterface, ArrayAccess
{
    public array $settings;

    public function __construct($settings)
    {
        $this->settings = $settings;
    }

    public function get(string $key): mixed
    {
        return $this->settings[$key] ?? null;
    }

    public function offsetExists(mixed $offset): bool
    {
        return isset($this->settings[$offset]);
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->get($offset);
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->settings[$offset] = $value;
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->settings[$offset]);
    }
}