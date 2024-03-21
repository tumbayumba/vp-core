<?php

namespace Core\Contracts\Constructor;

use App\Core\Contracts\Constructor\ConstructorObjectType;
use App\Core\Contracts\Constructor\Operation;
use App\Core\Contracts\Interfaces\Constructor\ConstructorComposite;
use App\Core\Contracts\Interfaces\Operable;
use Core\Contracts\Constructor\ConstructorObject;

abstract class Construction extends ConstructorObject implements ConstructorComposite,
                                                                 Operable
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

    public function setOperation(Operation $operation): self
    {
        return $this->attach($operation);
    }

    public function getOperation(mixed $id): ?Operation
    {
        if (!empty($this->items)) {
            foreach ($this->items as $item) {
                if ($item->getType() === ConstructorObjectType::OPERATION && $item->getId() === $id) {
                    return $item;
                }
            }
        }

        return null;
    }

    public function removeOperation(mixed $id): self
    {
        if (!empty($this->items)) {
            foreach ($this->items as $key => $item) {
                if ($item->getType() === ConstructorObjectType::OPERATION && $item->getId() === $id) {
                    unset($this->items[$key]);
                    break;
                }
            }
        }

        return $this;
    }

    public function getOperations(): array
    {
        $operations = [];
        if (!empty($this->items)) {
            foreach ($this->items as $key => $item) {
                if ($item->getType() === ConstructorObjectType::OPERATION) {
                    $operations[] = $item;
                }
            }
        }

        return $operations;
    }
}
