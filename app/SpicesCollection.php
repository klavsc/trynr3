<?php

namespace App;

class SpicesCollection
{
    private $spices = [];

    public function add(Spice $spice): void
    {
        $this->spices[] = $spice;
    }
    public function all(): array
    {
        return $this->spices;
    }
}
