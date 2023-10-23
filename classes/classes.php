<?php

class Product
{
    //public $img = 'https://picsum.photos/400/450';
    protected $name;
    public $price;
    public $description;
    public $category;
    public $type;

    function __construct($name, $price, $description, $category, $type)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
        $this->type = $type;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class Game extends Product
{

    public $dimensions;
    protected $img;

    function __construct($name, $price, $description, $category, $type, $dimensions, $img)
    {
        parent::__construct($name, $price, $description, $category, $type);
        $this->dimensions = $dimensions;
        $this->img = $img;
    }

    public function getImage(): string
    {
        return $this->img;
    }
}

class Food extends Product
{
    public $weight;
    protected $img;

    function __construct($name, $price, $description, $category, $type, $weight, $img)
    {
        parent::__construct($name, $price, $description, $category, $type);
        $this->type = $type;
        $this->weight = $weight;
        $this->img = $img;
    }

    public function getImage(): string
    {
        return $this->img;
    }
}

class Bed extends Product
{
    public $material;
    public $dimensions;
    protected $img;

    function __construct($name, $price, $description, $category, $type, $material, $dimensions, $img)
    {
        parent::__construct($name, $price, $description, $category, $type);
        $this->material = $material;
        $this->dimensions = $dimensions;
        $this->img = $img;
    }

    public function getImage(): string
    {
        return $this->img;
    }
}
