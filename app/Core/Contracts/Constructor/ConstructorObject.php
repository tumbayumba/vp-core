<?php

namespace Core\Contracts\Constructor;

use App\Core\Contracts\Constructor\ConstructorObjectType;
use Core\Contracts\Interfaces\Identifier;
use Core\Contracts\Interfaces\Naming;

abstract class ConstructorObject implements Identifier, Naming
{
    private mixed $id;
    private ?string $name;
    protected ConstructorObjectType $type;

    public function getId(): mixed
    {
        return $this->id;
    }

    public function setId(mixed $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): ConstructorObjectType
    {
        return $this->type;
    }

    public function setType(ConstructorObjectType $type): self
    {
        $this->type = $type;

        return $this;
    }
}
