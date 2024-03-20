<?php

namespace Core\Contracts\Constructor;

use App\Core\Contracts\Constructor\ConstructorObjectType;
use App\Core\Contracts\Interfaces\Constructor\ConstructorComposite;
use Core\Contracts\Constructor\ConstructorObject;

abstract class Construction extends ConstructorObject implements ConstructorComposite
{
    /**
     * @return ConstructorObject[]
     */
    private array $items = [];

    public function __construct()
    {
        $this->type = ConstructorObjectType::CONSTRUCTION;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function attach(ConstructorObject $object): self
    {
        $this->items[] = $object;

        return $this;
    }

    public function detach(ConstructorObject $object): self
    {
        foreach ($this->items as $key => $item) {
            if ($object === $item) {
                unset($this->items[$key]);
            }
        }

        return $this;
    }
}
