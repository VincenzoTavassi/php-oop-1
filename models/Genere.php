<?php

class Genere {
    public $name;
    public $id;

    function __construct(int $_id, string $_name)
    {
        $this->name = $_name;
        $this->id = $_id;
    }

}