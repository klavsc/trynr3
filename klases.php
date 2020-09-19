<?php

class Person{
    private string $name;
    private string $surname;
    private string $secondName;

    public function __construct($name, $surname, $secondName){

        $this->name = $name;
        $this->surname = $surname;
        $this->secondName = $secondName;
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
    public function getSecondName(): string
    {
        return $this->secondName;
    }


    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

}

$klavs = new Person('Klavs', 'Cirulis', 'Piektais');

$juris = new Person ('Juris', 'Berzins', 'Jurciks');

$zane = new Person('Zane', 'Vilcina', "");

echo $klavs->getName() . " " . $klavs->getSurname() . " " . $klavs->getSecondName();
echo $juris->getName() . " " . $juris->getSurname() . " " . $klavs->getSecondName();
echo $zane->getName() . " " . $zane->getSurname() . " " . $zane->getSecondName();







