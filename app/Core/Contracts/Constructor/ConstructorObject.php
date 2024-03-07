<?php

namespace Core\Contracts\Constructor;

use Core\Contracts\Interfaces\Identifier;
use Core\Contracts\Interfaces\Naming;

abstract class ConstructorObject implements Identifier, Naming
{
    private mixed $id;
    private ?string $name;

    public function getId(): mixed
    {
        return $this->id;
    }

    public function setId(mixed $id): Identifier
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): Naming
    {
        $this->name = $name;

        return $this;
    }
}
