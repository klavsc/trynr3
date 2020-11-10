<?php

class ProductStorage
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
        $products = [];

        foreach ($rows as $row) {
            $storeInfo = (array)explode(';', $row);

            $products [] = new Products(trim($storeInfo[0]), (int)$storeInfo[1], (int)$storeInfo[2]);
        }

        return $products;
    }

}