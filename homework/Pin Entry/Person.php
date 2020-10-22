<?php

class Person
{
    private string $username;
    private int $PIN;

    public function __construct(string $username, int $PIN)
    {
        $this->username = $username;
        $this->PIN = $PIN;
    }


    public function getUsername(): string
    {
        return $this->username;
    }


    public function getPIN(): int
    {
        return $this->PIN;
    }
}
