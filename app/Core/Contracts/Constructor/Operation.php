<?php

namespace App\Core\Contracts\Constructor;

use App\Core\Contracts\Interfaces\Constructor\ConstructorComposite;
use App\Core\Contracts\Interfaces\HasTool;
use App\Core\Tools\Tool;
use Core\Contracts\Constructor\ConstructorObject;

abstract class Operation extends ConstructorObject implements ConstructorComposite, HasTool
{
    private ?Tool $tool = null;

    /**
     * @return ConstructorObject[]
     */
    private array $items = [];

    public function __construct()
    {
        $this->type = ConstructorObjectType::OPERATION;
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

    public function getTool(): ?Tool
    {
        return $this->tool;
    }

    public function setTool(Tool $tool): self
    {
        $this->tool = $tool;

        return $this;
    }

}
