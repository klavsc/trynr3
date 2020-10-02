<?php

class RandomNumbers
{
    public array $numbers;

    public function __construct(array $numbers = [])
    {
        $this->numbers = $numbers;
    }

    public function getRandomNumber(): int
    {
       $number =  rand(1, 1000);
       $this->add($number);
       return $number;
    }

    public function add(int $number): void
    {
        $this->numbers[] = $number;
    }

    /**
     * @return array
     */
    public function getNumbers(): array
    {
        return $this->numbers;
    }

    public function getAvg(): float
    {
        return (array_sum($this->numbers) / (count($this->numbers) -1));
    }
}