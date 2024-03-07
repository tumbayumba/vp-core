<?php

namespace Core\Contracts\Interfaces;

interface Naming
{
    public function getName(): ?string;

    public function setName(string $name): self;
}
