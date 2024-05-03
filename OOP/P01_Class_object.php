<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP oop</title>
</head>

<body>
    <?php
    class Car
    {
        private $name;
        private $year;

        function setValues($name, $year)
        {
            $this->name = $name;
            $this->year = $year;
        }

        function getValues(){
            return "Name: ".$this->name." Year: ".$this->year;
        }
    }
    ?>
    <hr>
    <?php
    $car1 = new Car();
    $car1->setValues("ABC", 2020);
    $output = $car1->getValues();
    echo $output;
    ?>

    <br>
    <hr>
    <?php 
    var_dump($car1 instanceof Car);
    echo "<br>";

    ?>

    <a href="P02_construct.php">next</a>
</body>

</html>