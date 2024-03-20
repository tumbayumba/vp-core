<?php

namespace App\Core\Contracts\Interfaces\Constructor;

use Core\Contracts\Constructor\ConstructorObject;

interface ConstructorComposite
{
    /**
     * Returns an array of constructor objects.
     * @return ConstructorObject[]
     */
    public function getItems(): array;
    public function attach(ConstructorObject $object): self;

    public function detach(ConstructorObject $object): self;
}
