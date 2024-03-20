<?php

namespace App\Core\Contracts\Validator;

interface ValidatorManagerInterface
{
    /**
     * Get validators list
     * @return Validator[]
     */
    public function getValidators(): array;
    public function addValidator(Validator $validator): self;

    public function removeValidator(Validator $validator): self;

}
