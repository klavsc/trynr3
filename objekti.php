<?php declare(strict_types=1);

class Auto
{
    private string $brand;
    private string $plateNumber;
    private int $maxFuelTank;
    private float $fuelConsumption;
    private int $pinStarter;

    private float $currentFuelTank;
    private float $odometer;
    private bool $locked = true;

    public function __construct(
        string $brand,
        string $plateNumber,
        int $maxFuelTank,
        float $fuelConsumption,
        int $pinStarter,
        float $odometer = 0
    )
    {
        $this->brand = $brand;
        $this->plateNumber = $plateNumber;
        $this->maxFuelTank = $maxFuelTank;
        $this->fuelConsumption = $fuelConsumption;
        $this->pinStarter = $pinStarter;
        $this->odometer = $odometer;

        $this->currentFuelTank = (float)$this->maxFuelTank;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getPlateNumber()
    {
        return $this->plateNumber;
    }

    public function getCurrentFuelTank(): float
    {
        return $this->currentFuelTank;
    }

    public function getOdometer(): float
    {
        return $this->odometer;
    }

    public function getPin(): int
    {
        return $this->pinStarter;
    }

    public function getLocked(): bool
    {
        return $this->locked;
    }

    public function updateDistance(float $amount): void
    {
        $this->updateOdometer($amount);
        $this->updateFuelTank(-(($this->fuelConsumption / 100) * $amount));
    }

    public function updateFuelTank(float $amount): void
    {
        $this->currentFuelTank += $amount;
    }

    public function tryUnlock(int $pin): void
    {
        if ($pin === $this->pinStarter)
        {
            $this->locked = false;
        }
    }

    private function updateOdometer(float $amount): void
    {
        $this->odometer += $amount;
    }
}

$cars = [
    new Auto('Volvo', 'AD345', 100, 7, 123),
    new Auto('Audi A6', 'JZ0000', 100, 6.5, 321),
    new Auto('BMW', 'PV1234', 120, 7.1, 111),
    new Auto('Opel', 'OP0123', 90, 5.1, 333),
];

$car = null;

while ($car === null)
{
    foreach ($cars as $carKey => $car)
    {
        echo $car->getBrand() . ' ';
        echo $car->getPlateNumber() . ' ';
        echo 'KEY: ' . $carKey . ' ';
        echo 'PIN: ' . $car->getPin() . PHP_EOL;
    }

    $carKey = (int) readline('Enter car key: ');
    $car = $cars[$carKey] ?? null;

    if ($car === null)
    {
        echo 'Wrong car key!' . PHP_EOL;
    }
}

$attempts = 0;
while ($car->getLocked() && $attempts <= 3)
{
    $pin = (int) readline('Enter pin for car ' . $car->getBrand() . ': ');

    $car->tryUnlock($pin);

    $attempts++;
}

while ($car->getCurrentFuelTank() >= 0 && $car->getLocked() === false) {
    $distance = rand(1, 10);

    $car->updateDistance($distance);

    echo 'Distance: (+' . $distance . 'km) ' . $car->getOdometer() . 'km ';
    echo 'Brand: ' . $car->getBrand() . ' ';
    echo 'Number: ' . $car->getPlateNumber() . ' ';
    echo 'Fuel: ' . $car->getCurrentFuelTank() . PHP_EOL;

    sleep(1);
}