<?php

namespace App\Core\Decorators;

use App\Core\Decorators\Decorator;

class OneSidedDecorator extends Decorator
{
    private bool $isOneSided = false;

    public function isOneSided(): bool
    {
        return $this->isOneSided;
    }

    public function setOneSided(bool $isOneSided): void
    {
        $this->isOneSided = $isOneSided;
    }


}
