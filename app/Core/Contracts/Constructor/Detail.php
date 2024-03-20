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

    /**
     * @return Operation[]
     */
    private array $operations = [];

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

        return $this;
    }

    public function getOperation(mixed $id): ?Operation
    {
        if (!empty($this->operations)) {
            foreach ($this->operations as $operation) {
                if ($operation->getId() === $id) {
                    return $operation;
                }
            }
        }

        return null;
    }

    public function removeOperation(mixed $id): self
    {
        if (!empty($this->operations)) {
            foreach ($this->operations as $key => $operation) {
                if ($operation->getId() === $id) {
                    unset($this->operations[$key]);
                    break;
                }
            }
        }

        return $this;
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
