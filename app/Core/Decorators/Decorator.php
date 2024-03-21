<?php

namespace App\Core\Decorators;


abstract class Decorator
{
    public function __construct(protected $component) {}

    public function __call(string $name, array $arguments): mixed
    {
        if (method_exists($this->component, $name)) {
            return $this->component->{$name}(...$arguments);
        } else {
            throw new \BadMethodCallException("Method {$name} does not exist");
        }
    }
}
