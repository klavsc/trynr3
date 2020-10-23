<?php


class ChatData
{
    private array $messages;
    private $file;

    public function __construct()
    {
        $this->file = fopen('Chat.csv', 'r');
        $this->loadFromCSV();
    }

    private function loadFromCSV(): void
    {
        while (!feof($this->file)) {
            $data = (array) fgetcsv($this->file);
            if (count($data) > 1) {
                $this->messages[] = new Chat($data[0], $data[1]);
            }
        }
    }

    private function saveToCSV(): void
    {
        $file = fopen('Chat.csv', 'rw+');
        foreach ($this->messages as $message) {
            fputcsv($file, [$message->getUserID(), $message->getMessage()]);
        }
    }

    public function addMessage(Chat $message): void
    {
        $this->messages[] = $message;
        $this->saveToCSV();
    }
}
