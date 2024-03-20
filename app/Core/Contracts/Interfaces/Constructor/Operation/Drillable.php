<?php

namespace App\Core\Contracts\Interfaces\Constructor\Operation;

interface Drillable
{
    public function getCx(): float;
    public function setCx(float $cx): self;
    public function getCy(): float;
    public function setCy(float $cy): self;
    public function getZ(): float;
    public function setZ(float $z): self;
    public function getR(): float;
    public function setR(float $r): self;
    public function getD(): float;
}
