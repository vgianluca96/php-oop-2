<?php

class Product
{
    public $img = 'https://picsum.photos/400/450';
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

    function __construct($name, $price, $description, $category, $type, $dimensions)
    {
        parent::__construct($name, $price, $description, $category, $type);
        $this->dimensions = $dimensions;
    }
}

class Food extends Product
{
    public $weight;

    function __construct($name, $price, $description, $category, $type, $weight)
    {
        parent::__construct($name, $price, $description, $category, $type);
        $this->type = $type;
        $this->weight = $weight;
    }
}

class Bed extends Product
{
    public $material;
    public $dimensions;

    function __construct($name, $price, $description, $category, $type, $material, $dimensions)
    {
        parent::__construct($name, $price, $description, $category, $type);
        $this->material = $material;
        $this->dimensions = $dimensions;
    }
}
