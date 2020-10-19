<?php

class Rock extends AbstractElement implements ElementInterface
{
    protected array $beatable = [
        Paper::class,
        Spock::class
    ];
}