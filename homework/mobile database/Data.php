<?php

class Data
{
    private $file;

    private array $persons;

    public function __construct()
    {
        $this->file = fopen('phonebook.csv', 'rw');
        $this->loadPersons();
    }

    public function loadPersons(): void
    {
        while (!feof($this->file)) {

            $personData = (array)fgetcsv($this->file);
            $this->persons[] = new Phonebook(
                (string)$personData[0],
                (string)$personData[1],
                (string)$personData[2],
            );
        }
    }


    public function getByNumber(string $number): Phonebook
    {
        foreach ($this->persons as $person) {
            if ($person->getNumber() == $number) {
                return $person;
            }
        }
        echo 'Number not found';
    }


}