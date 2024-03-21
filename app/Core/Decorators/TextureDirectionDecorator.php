<?php

namespace App\Core\Decorators;

use App\Core\Contracts\Constructor\Direction;
use App\Core\Contracts\Interfaces\DirectionInterface;

class TextureDirectionDecorator extends Decorator implements DirectionInterface
{
    private ?Direction $textureDirection = null;

    public function getDirection(): ?Direction
    {
        return $this->textureDirection;
    }

    public function setDirection(Direction $direction): self
    {
        $this->textureDirection = $direction;

        return $this;
    }
}
