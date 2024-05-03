<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    abstract class Car
    {
        private $name;

        function setValues($name)
        {
            $this->name = $name;
        }

        function getValues()
        {
            return "Name: " . $this->name;
        }
    }

    class Alto extends Car
    {
        function getYear()
        {
            echo "Year: 2021";
        }
    }
// $c1 = new Car(); // Uncaught Error: Cannot instantiate abstract class Car
$c1 = new Alto();
$c1->setValues("alto");
echo $c1->getValues();

    ?>
    <br>
    <a href="P09_Interfaces.PHP">P09_Interfaces</a>
</body>

</html>