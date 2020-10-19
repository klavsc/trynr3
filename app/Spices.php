<?php

namespace App;

abstract class Spice
{

    public function getName(): string
    {
        return get_class($this);
    }
}






