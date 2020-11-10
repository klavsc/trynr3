<?php

class CustomerLog
{
    private string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function load(): array
    {
        $content = file_get_contents($this->path);
        $rows = array_filter((array)explode('|', $content));
        $customers = [];

        foreach ($rows as $row) {
            $personInfo = (array)explode(';', $row);

            $customers [] = new Person(trim($personInfo[0]), (int)$personInfo[1]);
        }

        return $customers;
    }

}
