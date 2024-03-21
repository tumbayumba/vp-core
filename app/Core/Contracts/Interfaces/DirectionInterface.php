<?php

namespace App\Core\Contracts\Interfaces;

use App\Core\Contracts\Constructor\Direction;

interface DirectionInterface
{
    public function getDirection(): ?Direction;
    public function setDirection(Direction $direction): self;
}
