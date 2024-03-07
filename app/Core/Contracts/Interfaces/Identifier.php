<?php

namespace Core\Contracts\Interfaces;

interface Identifier
{
    public function getId(): mixed;
    public function setId(mixed $id): self;
}
