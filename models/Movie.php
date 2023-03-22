<?php

class Movie
{
    public $id;
    public $title;
    public $description;
    public $generi;
    public $picture;

    function __construct(
        int $_id,
        string $_title,
        string $_description,
        array $_generi,
        string $_picture
    ) {
        $this->id = $_id;
        $this->title = $_title;
        $this->description = $_description;
        $this->generi = $_generi;
        $this->picture = $_picture;
    }

    public function getGenres()
    {
        foreach ($this->generi as $key => $genere) {
            if ($key + 1 == count($this->generi)) echo "$genere->name.";
            else echo "$genere->name, ";
        }
    }
}
