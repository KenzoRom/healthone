<?php


class Product
{
    public $id;
    public $name;
    public $image;
    public $description;
    public $categoryid;

    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->categoryid, 'integer');
    }
}