<?php

class Paper extends AbstractElement implements ElementInterface
{
    protected array $beatable = [
        Rock::class,
        Lizard::class
    ];
}