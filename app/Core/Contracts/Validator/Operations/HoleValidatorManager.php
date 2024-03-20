<?php

namespace App\Core\Contracts\Validator\Operations;

use App\Core\Contracts\Validator\ValidatorManager;

class HoleValidatorManager extends ValidatorManager
{

    public function validate(): bool
    {
        return true;
    }

}
