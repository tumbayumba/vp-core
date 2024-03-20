<?php

namespace App\Core\Contracts\Interfaces;

use App\Core\Tools\Tool;

interface HasTool
{
    public function getTool(): ?Tool;

    public function setTool(Tool $tool): self;
}
