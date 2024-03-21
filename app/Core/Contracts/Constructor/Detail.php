<?php

namespace App\Core\Contracts\Constructor;

use App\Core\Contracts\Interfaces\Constructor\ConstructorComposite;
use App\Core\Contracts\Interfaces\Operable;
use App\Core\Contracts\Validator\HasValidatorManager;
use App\Core\Contracts\Validator\ValidatorManagerInterface;
use Core\Contracts\Constructor\ConstructorObject;

abstract class Detail extends ConstructorObject  implements ConstructorComposite,
                                                            Operable,
                                                            HasValidatorManager
{
    /**
     * @return ConstructorObject[]
     */
    private array $items = [];

    private ValidatorManagerInterface $validatorManager;

    public function __construct()
    {
        $this->type = ConstructorObjectType::DETAIL;
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

    public function setValidatorManager(ValidatorManagerInterface $manager): self
    {
        $this->validatorManager = $manager;

        return $this;
    }

    public function getValidatorManager(): ValidatorManagerInterface
    {
        return $this->validatorManager;
    }
}
