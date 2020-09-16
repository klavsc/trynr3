<?php

class Auto
{
    protected string $name;
    protected string $fuelCapacity;

    public function __construct(string $name, int $fuelCapacity){
        $this->name = $name;
        $this->fuelCapacity = $fuelCapacity;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getFuelCapacity(): string
    {
        return $this->fuelCapacity;
    }
}

class Audi extends Auto
{
    public function audiFeatures(): string
    {
        return 'Leather seats';
    }
}

class Volvo extends Auto
{
    public function volvoFeatures(): string
    {
        return 'Economic';
    }
}

$cars = [
    new Audi('Audi R8', 100),
    new Volvo('Volvo 2000', 70)
];

foreach ($cars as $car)
{
    echo $car->getName() . ' (' . $car->getFuelCapacity() . ') - ' ;

    switch (get_class($car))
    {
        case 'Audi':
            echo $car->audiFeatures();
            break;
        case 'Volvo':
            echo $car->volvoFeatures();
            break;
    }

    echo PHP_EOL;
}