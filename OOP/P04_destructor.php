<!-- https://www.w3schools.com/php/php_oop_destructor.asp -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Car{
        private $name;

        function __construct($name){
            $this->name = $name;
        }

        function __destruct(){
            echo "Call destruct";
        }
    }

    $c1 = new Car("ABC");
    $c2 = new Car("PQR");
    ?>
<br>
    <a href="P05_Access_Modifiers.php">next: Access Modifiers</a>
</body>
</html>