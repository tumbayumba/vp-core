<?php

namespace App\Core\Decorators;

use \App\Core\Contracts\Interfaces\Geometric\Rectangular;

class PlateDecorator extends Decorator implements Rectangular
{
    private ?float $width = null;
    private ?float $height = null;
    private ?float $thickness = null;

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(float $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getThickness(): ?float
    {
        return $this->thickness;
    }

    public function setThickness(float $thickness): self
    {
        $this->thickness = $thickness;

        return $this;
    }

}
