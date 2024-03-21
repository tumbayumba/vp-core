<?php

namespace App\Core\Decorators;


use Core\Contracts\Constructor\ConstructorObject;

abstract class Decorator extends ConstructorObject
{
    public function __construct(protected $component) {}

    /**
     * @return mixed
     */
    public function getComponent(): mixed
    {
        return $this->component;
    }

    /**
     * @param mixed $component
     */
    public function setComponent(mixed $component): void
    {
        $this->component = $component;
    }

    public function __call(string $name, array $arguments): mixed
    {
        return $this->callComponentMethod($this->getComponent(), $name, $arguments);
    }

    protected function callComponentMethod(mixed $component, string $name, array $arguments)
    {
        if (method_exists($component, $name)) {
            return $component->{$name}(...$arguments);
        } else {
            if (method_exists($component, 'getComponent')) {
                $childComponent = $component->getComponent();
                return $this->callComponentMethod($childComponent, $name, $arguments);
            }

            throw new \BadMethodCallException("Method {$name} does not exist");
        }
    }
}
