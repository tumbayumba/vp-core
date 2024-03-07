<?php

namespace App\Core\Contracts\Interfaces\Geometric;

/**
 * Rectangular parallelepiped
 */
interface Rectangular
{
    public function getWidth(): float;
    public function getHeight(): float;
    public function getThickness(): float;
}
