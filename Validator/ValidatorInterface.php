<?php

declare(strict_types=1);

namespace App\Validator;

use ArrayAccess;

/**
 * Interface ValidatorInterface
 */
interface ValidatorInterface {

    /**
     * @param ArrayAccess $validatable
     * @param array       $validationRules
     *
     * @return bool
     */
    public function validate(ArrayAccess $validatable, array $validationRules): bool;
}