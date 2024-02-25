<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static\style.css">

    <title>Operators</title>
</head>

<body>
    <h1>Operator in PHP</h1>
    <p>In PHP, operators are used to perform operations on variables and values. Some types of operators in PHP include:
    </p>

    <p>Arithmetic Operators: Addition (+), Subtraction (-), Multiplication (*), Division (/), Modulus (%), Increment
        (++), Decrement (--).</p>

    <p>Assignment Operators: Assign values (=), Combined assignment operators like +=, -=, *=, /=, etc.</p>

    <p>Comparison Operators: Compare values (==, ===, !=, !==, <,>, <=,>=).</p>

    <p>Logical Operators: Combine conditions (AND - &&, OR - ||, NOT - !).</p>

    <p>String Operators: Concatenate strings (.), Combined string and assignment operators (.=).</p>

    <p>Array Operators: Used to compare arrays (+, ==, ===, !=, <>, !==).</p>

    <p>Ternary Operator: Shorthand for if-else (condition ? value_if_true : value_if_false).</p>

    <h3>For instance:</h3>

    <code>
$a = 10;<br>
$b = 5;<br>
<br>
// Arithmetic Operators<br>
$sum = $a + $b; // Addition<br>
$difference = $a - $b; // Subtraction<br>
<br>
// Comparison Operators<br>
$is_equal = ($a == $b); // Check if $a is equal to $b<br>
<br>
// Logical Operators<br>
$is_valid = ($a > 0 && $b < 10); // Check if $a is greater than 0 AND $b is less than 10<br>
</code>
    <p>
        These operators are crucial for performing various tasks like calculations, comparisons, and conditional
        operations within PHP.</p>

        <?php
        $a = 5;
        $b = 12;
        $c = 44;

        $res = $a + (++$b) + ($c++);
        echo $res."<br>";
        echo $c++."<br>";
        echo $b;
        ?>
        <hr>
    <a href="WP02_variables.php" class="previous">Previous</a>

    <a href="WP04_controlStructure.php" class="next">Next</a>

</body>

</html>