<?php

class Person
{
    private string $name;
    private int $money;

    public function __construct(string $name, int $money)
    {
        $this->name = $name;
        $this->money = $money;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getMoney(): int
    {
        return $this->money;
    }

    public function removeMoney(int $amount): void
    {
        $this->money -= $amount;
    }
}

