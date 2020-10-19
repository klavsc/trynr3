<?php

class PersonData
{
    private $file;
    private array $persons;

    public function __construct()
    {
        $this->file = fopen('person.csv', 'a+');

    }

    public function loadPersons(): void
    {

        while (!feof($this->file)) {

            $personData = (array) fgetcsv($this->file);

            $person = new Person(
                $personData[0],
                $personData[1],
                $personData[2],
                $personData[3]
            );

            $this->persons [$personData[2]] = $person;
        }

    }


//       public function getById(string $id): Person
//       {
//           $id = (array) fgetcsv($this->file);
//
//       }

        public function putIn(Person $person)
        {
            fputcsv($this->file, $person->toArray(), ',');
        }


}