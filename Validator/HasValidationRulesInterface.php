<?php

declare(strict_types=1);

namespace App\Validator;

/**
 * Interface HasValidationRulesInterface
 */
interface HasValidationRulesInterface
{
    /**
     * @return array
     */
    public function getValidationRules(): array;
}