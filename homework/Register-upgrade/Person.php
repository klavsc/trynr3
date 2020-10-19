<?php

class Person
{
    private string $name;
    private string $surname;
    private string $id;
    private string $address;

    public function __construct(string $name, string $surname, string $id, string $address)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->id = $id;
        $this->address = $address;
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
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->getName(),
            'surname' => $this->getSurname(),
            'id' => $this->getID(),
            'address' => $this->getAddress()

        ];
    }

}