<?php

class Spock extends AbstractElement implements ElementInterface
{
    protected array $beatable = [
        Lizard::class,
        Paper::class
    ];
}
