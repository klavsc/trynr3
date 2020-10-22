<?php

class Data
{
    private array $users;
    private $file;

    public function __construct()
    {
        $this->file = fopen('Person.csv', 'r');
        $this->load();
    }

    public function load(): void
    {
        while (!feof($this->file)) {
            $data = (array) fgetcsv($this->file);
            if (count($data) > 1) {
                $this->users[] = new person($data[0], $data[1]);
            }
        }
    }

    public function logIn(int $PIN): ? person
    {
        foreach ($this->users as $user) {
            if ($user->getPIN() == $PIN) {
                return $user;
            }
        }
        return null;
    }
}
