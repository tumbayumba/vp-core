<?php

namespace App\Core\Contracts\Validator;

abstract class ValidatorManager implements ValidatorManagerInterface, Validator
{
    /**
     * @return Validator[]
     */
    protected array $validators = [];

    public function addValidator(Validator $validator): self
    {
        $this->validators[] = $validator;

        return $this;
    }

    public function removeValidator(Validator $validator): self
    {
        foreach ($this->validators as $key => $v) {
            if ($v === $validator) {
                unset($this->validators[$key]);
            }
        }

        return $this;
    }

    public function getValidators(): array
    {
        return $this->validators;
    }

    abstract public function validate(): bool;
}
