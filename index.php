<?php


class product
{
    public $category;
    public $price;
    public $description;

    function __construct($category, $price, $description)
    {
        $this->category  = $category;
        $this->price = $price;
        $this->description = $description;
    }
}

$product = new product('Cat', '19.99', 'Lorem ipsum');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container py-4">

        <?php
        var_dump($product);
        ?>
    </div>

</body>

</html>