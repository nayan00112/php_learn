<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structure in php</title>
    <link rel="stylesheet" href="static\style.css">
</head>

<body>
    <h1>Control Structure in php</h1>
    <p>Control structures in PHP are constructs that allow you to alter the flow of execution in your code. Here are
        some key control structures:</p>
    <ol>
        <li>
            <h3>Conditional Statements:</h3>
        </li>
        <ul>
            <li>if...else: Executes code based on a condition.</li>
            <li>elseif: Additional condition(s) to check in an if...else statement.</li>
            <li>switch: Selects one of many blocks of code to be executed.</li>
        </ul>
        Example:

        <code>
$age = 18;<br>
<br>
if ($age < 18) {<br>
    echo "Underage";<br>
} elseif ($age >= 18 && $age < 21) {<br>
    echo "Young adult";<br>
} else {<br>
    echo "Adult";<br>
}<br>
</code>
        <li>
            <h3>Loops:</h3>
        </li>
        <ul>
            <li>for: Executes a block of code a specified number of times.</li>
            <li>while: Executes a block of code as long as the specified condition is true.</li>
            <li>do...while: Executes a block of code once, then repeats the loop as long as the condition is true.</li>
            <li>foreach: Loops through arrays or collections.</li>
        </ul>
        Example:

        <code>
// for loop<br>
for ($i = 0; $i < 5; $i++) {<br>
    echo $i;<br>
}<br>
<br>
// while loop<br>
$j = 0;<br>
while ($j < 5) {<br>
    echo $j;<br>
    $j++;<br>
}<br>
</code>
        <li>
            <h3>Control Statements:</h3>
        </li>
        <ul>
            <li>break: Terminates the execution of a loop.</li>
            <li>continue: Skips the current iteration of a loop.</li>
            <li>return: Exits a function and returns a value. (use in function)</li>
        </ul>
    </ol>
    <p>These control structures are fundamental for directing the flow of your PHP code, allowing you to create
        conditions,
        iterate through data, and manage program execution based on various conditions.</p>
    <hr>
    <a href="WP03_operator.php" class="previous">Previous</a>

    <a href="WP05_function.php" class="next">Next</a>
    <hr>
    <?php
    $a = 2;
    $b = 3;
    if ($a == $b) {
        echo "equals number";
    } else if ($a > $b) {
        echo "a is larger";
    } else {
        echo "b is larger";
    }
    echo "<br>";
    switch ($b) {
        case 1: {
            echo "one";
            break;
        }
        case 2: {
            echo "two";
            break;
        }
        case 3: {
            echo "three";
            break;
        }
        default: {
            echo "none";
        }
    }
    echo "<br>";
    for ($i = 0; $i < 5; $i++) {
        echo $i . "<br>";
    }
    echo "<br>";
    while ($a <= 6) {
        echo $a * $a . "<br>";
        $a++;
    }
    echo "<br>";
    do {
        echo $b . "<br>";
        $b++;
    } while ($b < 10);

    echo "<br>";

    for ($i = 0; $i < 5; $i++) {
        if ($i == 2) {
            continue;
        } else {
            echo $i . "<br>";
        }
    }
    echo "<br>";
    $fruits = array("apple" => "red", "mango" => "yellow");

    foreach ($fruits as $k => $v) {
        echo $k . ":" . $v . "<br>";
    }
    echo "<br>";
    $arr = array("nayan", "ram", "shyam");
    foreach ($arr as $i) {
        echo $i . "<br>";
    }
    echo "<br>";
    for ($i = 0; $i < 10; $i++) {
        if ($i > 5) {
            break;
        }

        echo $i . "<br>";
    }

    ?>

</body>

</html>