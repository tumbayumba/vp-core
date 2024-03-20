<?php

namespace App\Core\Contracts\Validator;

interface HasValidatorManager
{
    public function setValidatorManager(ValidatorManagerInterface $manager): self;
    public function getValidatorManager(): ValidatorManagerInterface;
}
