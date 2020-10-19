<?php

class Lizard extends AbstractElement implements ElementInterface
{
    protected array $beatable = [
        Rock::class,
        Scissors::class
    ];
}
