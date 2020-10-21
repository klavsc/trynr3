<?php

class Data implements LikeDislike
{
    private string $path;
    private array $photos;

    public function __construct(string $path)
    {
        $this->path = $path;
        $this->load();
    }

    public function load(): void
    {
        $file = fopen($this->path, 'r');

        while (($photo = fgetcsv($file)) !== false) {
            $this->photos[] = new PicturesConstruct(
                $photo[0],
                $photo[1],
                $photo[2]
            );
        }
    }

    public function getPhotos(): array
    {
        return $this->photos;
    }

    public function findPhotoByID(int $id): PicturesConstruct
    {
        foreach ($this->photos as $photo) {
            if ($photo->getID() == $id) {
                return $photo;
            }
        }
    }

    public function save(): void
    {
        $file = fopen($this->path, 'w');

        if (isset($this->photos)) {
            foreach ($this->photos as $photo) {
                fputcsv($file, (array)$photo);
            }
        }

        fclose($file);
    }
}
