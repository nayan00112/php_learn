<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="static\style.css">

</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // $name = $_GET["name"];
        $name = isset($_GET['name']) ? $_GET['name'] : "No Name";


        // echo "Name: " . $name[0] . "";
        echo "Name: " . htmlspecialchars($name) . "<br>";

    }
    ?>

    <hr>
    <a href="WP08_GET_FORM.html" class="previous">Previous</a>

    <a href="#" class="next">Next</a>
    <hr>
</body>

</html>