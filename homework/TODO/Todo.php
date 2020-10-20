<?php

class Task
{

    private string $description;
    private bool $completed;

    public function __construct(string $description, bool $completed)
    {

        $this->description = $description;
        $this->completed = $completed;
    }


    public function getDescription(): string
    {
        return $this->description;
    }

    public function isCompleted(): bool
    {
        return $this->completed;
    }
}

