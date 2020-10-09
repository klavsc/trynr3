<?php

class PersonData
{
    private $file;

    public function __construct()
    {
        $this->file = fopen('names.csv', 'rw+');

    }

    public function getByName(string $name): Person
    {
        $person = null;

        while (!feof($this->file)) {
            $personData = (array) fgetcsv($this->file);

            if ($name === $personData[0])
            {
                $person = new Person(
                    $personData[0],
                    $personData[1],
                    $personData[2]
                );
            }
        }

        if ($person === null) {
            $api = file_get_contents('https://api.agify.io/?name=' . $name);
            $person = json_decode($api, true);
            $person = new Person(
                $person['name'],
                $person['age'],
                $person['count']
            );

            fputcsv($this->file, $person->toArray());
        }

        return $person;
    }

}
