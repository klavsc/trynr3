<?php

class Data
{
    private array $users;
    private $databaseFile;

    public function __construct()
    {
        $this->databaseFile = fopen('Person.csv', 'r');
        $this->loadFromCSV();
    }

    public function loadFromCSV(): void
    {
        while (!feof($this->databaseFile)) {
            $data = (array)fgetcsv($this->databaseFile);
            if (count($data) > 1) {
                $this->users[] = new Person($data[0], $data[1], $data[2]);
            }
        }
    }

    public function logIn(int $PIN): ?Person
    {
        foreach ($this->users as $user) {
            if ($user->getPIN() == $PIN) {
                return $user;
            }
        }
        return null;
    }

    public function findByUsername(string $username): Person
    {
        foreach ($this->users as $user) {
            if ($user->getUsername() == $username) {
                return $user;
            }
        }
    }
}
