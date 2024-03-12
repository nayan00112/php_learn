<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post data form</title>
    <link rel="stylesheet" href="static\style.css">

</head>

<body>
<h1>11. post data recive</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = isset($_POST["name"]) ? $_POST["name"] : "undefined";
        $rangenum = isset($_POST["rangenum"]) ? $_POST["rangenum"] : "undefined";

        echo "Name : " . htmlspecialchars($name) . "<br>Range: " . htmlspecialchars($rangenum) . "";
    }
    ?>
    <hr>
    <a href="WP10_POST_FORM.html" class="previous">Previous</a>

    <a href="WP12_FILE_HTML.html" class="next">Next</a>
    <hr>
</body>

</html>