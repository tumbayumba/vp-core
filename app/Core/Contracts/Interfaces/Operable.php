<?php

namespace App\Core\Contracts\Interfaces;

use App\Core\Contracts\Constructor\Operation;

interface Operable
{
    public function setOperation(Operation $operation): self;
    public function getOperation(mixed $id): ?Operation;
    public function removeOperation(mixed $id): self;
    /**
     * @return Operation[]
     */
    public function getOperations(): array;

}
