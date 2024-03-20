<?php

namespace App\Core\Contracts\Validator;

interface Validator
{
    public function validate(): bool;
}
