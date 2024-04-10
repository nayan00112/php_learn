<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static\style.css">

    <title>Variables</title>
</head>

<body>
    <h1>2. PHP Variables</h1>
    <hr>
    <hr>
    <p>In PHP, variables are used to store data values. Some key points about variables in PHP:</p>

    <p>Variable Declaration: PHP variables start with the $ sign followed by the variable name.</p>
    <p>Variable Naming: They must start with a dollar sign ($) and a letter or underscore. Subsequent characters can be
        letters, numbers, or underscores.</p>
    <p>Data Types: PHP is loosely typed, meaning variables don't need explicit declaration of data types. They
        automatically change types as needed.</p>
    <p>Variable Scope: Variables can have different scopes - local, global, or static. Local variables are accessible
        only within the function they are declared in, while global variables can be accessed from anywhere in the
        script.</p>
    <p>Variable Assignment: Values are assigned using the assignment operator =.</p>

    <h3>For example:</h3>
    <code>
$name = "John"; // Assigning a string value to $name<br>
$age = 25; // Assigning an integer value to $age<br>
$isStudent = true; // Assigning a boolean value to $isStudent<br>
</code>

    <p>Remember, PHP variables are case-sensitive. So, $name and $Name are considered different variables.</p>

    <?php
    $name = "nayen";
    $email = "nayan1@g.c";

    echo "Name: " . $name . "Email: " . $email . "";

    echo "<hr>";
    $x = "Hello";
    var_dump($x);
    echo "<br>";
    echo "for view type";
    echo "<hr>";
    ?>
    <a href="WP01_Welcome.php" class="previous">Previous</a>

    <a href="WP03_operator.php" class="next">Next</a>

</body>

</html>