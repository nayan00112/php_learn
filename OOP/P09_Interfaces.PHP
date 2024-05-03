<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
</head>
<body>
    <?php
    interface Animal {
        public function sound();
    }
    class Dog implements Animal{
        public function sound(){
            echo "Bow";
        }
    }

    $d1 = new Dog();
    $d1->sound();
    ?>
</body>
</html>