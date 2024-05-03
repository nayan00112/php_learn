<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Student{
        private $name;
        private $rolnum;

        function __construct($name, $rolnum){
            $this->name = $name;
            $this->rolnum = $rolnum;
        }

        function display(){
            echo $this->name;
            echo "<br>".$this->rolnum;
        }

    }

    $s1 = new Student("Nayan", 48);
    $s1->display();
    ?>
<br>
    <a href="P04_destructor.php">Next Destructor</a>
</body>
</html>