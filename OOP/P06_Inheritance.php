<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php 
    class Car{
        private $name;

        function setValues($name)
        {
            $this->name = $name;
        }

        function getValues(){
            return "Name: ".$this->name;
        }
    }

    class Alto extends Car{
        function getYear(){
            echo "Year: 2021";
        }
    }

    $c1 = new Alto();
    $c1->setValues("Alto");
    $c1->getValues();
    $c1->getYear();
    ?>
<br>
    <a href="P07_Constants.php">P07_Constants</a>
</body>
</html>