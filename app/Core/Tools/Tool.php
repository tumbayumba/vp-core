<?php

namespace App\Core\Tools;

use Core\Contracts\Interfaces\Naming;

abstract class Tool implements Naming
{
    private ?string $name;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
