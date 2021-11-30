<?php


class Category
{
    public $id;
    public $name;
    public $picture;

    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->name, 'string');
        settype($this->picture, 'string');
    }
}