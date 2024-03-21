<?php

namespace App\Core\Contracts\Interfaces\Geometric;

/**
 * Rectangular parallelepiped
 */
interface Rectangular
{
    public function getWidth(): ?float;
    public function setWidth(float $width): self;
    public function getHeight(): ?float;
    public function setHeight(float $height): self;
    public function getThickness(): ?float;
    public function setThickness(float $thickness): self;
}
