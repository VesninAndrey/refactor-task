<?php

declare(strict_types=1);

namespace App\Validator;

use ArrayAccess;

/**
 * Class Validator
 */
class Validator implements ValidatorInterface
{
    /**
     * @param ArrayAccess $validatable
     * @param array        $validationRules
     *
     * @return bool
     */
    public function validate(ArrayAccess $validatable, array $validationRules): bool
    {
        //@todo Not the actual code but just an example

        return true;
    }
}