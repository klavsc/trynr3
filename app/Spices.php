<?php

namespace App;

abstract class Spices
{
    public abstract function getTaste(): string;

    public function getName(): string
    {
        return get_class($this);
    }
}

class Peper extends Spices
{
    private $taste;
    private $name;

    public function __construct(string $name, string $taste)
    {
        $this->taste = $taste;
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTaste(): string
    {
        return $this->taste;
    }
}


