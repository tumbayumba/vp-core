<?php

namespace App\Core\Operations;

use App\Core\Contracts\Constructor\Operation;
use App\Core\Contracts\Interfaces\Constructor\Operation\Drillable;
use App\Core\Tools\Tool;

class Hole extends Operation implements Drillable
{
    private ?float $cx;
    private ?float $cy;
    private ?float $z;
    private ?float $r;

    public function __construct(array $data = [])
    {
        parent::__construct();
        if (!empty($data)) {
            $this->cx = $data['cx'] ?? null;
            $this->cy = $data['cy'] ?? null;
            $this->z = $data['z'] ?? null;
            $this->r = $data['r'] ?? null;
        }
    }

    public function getCx(): float
    {
        return $this->cx;
    }

    public function setCx(float $cx): self
    {
        $this->cx = $cx;

        return $this;
    }

    public function getCy(): float
    {
        return $this->cy;
    }

    public function setCy(float $cy): self
    {
        $this->cy = $cy;

        return $this;
    }

    public function getZ(): float
    {
        return $this->z;
    }

    public function setZ(float $z): self
    {
        $this->z = $z;

        return $this;
    }

    public function getR(): float
    {
        return $this->r;
    }

    public function setR(float $r): self
    {
        $this->r = $r;

        return $this;
    }

    public function getD(): float
    {
        return $this->r;
    }

}
