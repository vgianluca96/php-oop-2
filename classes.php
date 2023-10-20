<?php

class product
{
    public $name;
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
}

class game extends product
{

    public $dimensions;

    function __construct($name, $price, $description, $category, $type, $dimensions)
    {
        parent::__construct($name, $price, $description, $category, $type);
        $this->dimensions = $dimensions;
    }
}

class food extends product
{
    public $weight;

    function __construct($name, $price, $description, $category, $type, $weight)
    {
        parent::__construct($name, $price, $description, $category, $type);
        $this->type = $type;
        $this->weight = $weight;
    }
}

class bed extends product
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
