<?php

namespace Core\Contracts\Interfaces\Constructor;

use Core\Contracts\Constructor\Side;

interface Sidesable
{
    public function getSide(mixed $id): Side;

    public function setSide(Side $side): self;

    /**
     * Returns an array of Side objects.
     * @return Side[]
     */
    public function getSides(): array;

}
