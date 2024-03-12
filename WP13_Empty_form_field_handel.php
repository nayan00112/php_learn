<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (!empty($_POST["name"])) {
            echo $_POST["name"] . "<br>";
        } else {
            echo "Empty value...";
        }
    }
    ?>
</body>

</html>