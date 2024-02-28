<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
    <link rel="stylesheet" href="static\style.css">

</head>
<body>
<h1>5. Function </h1>

<p>In PHP, functions are blocks of reusable code that perform a specific task. Here are the key aspects of functions:</p>

<p>Defining a Function: Functions in PHP are defined using the function keyword, followed by the function name, parameters in parentheses, and the code block in curly braces {}.</p>
<p>Example:</p>

<code>
function greet($name) {<br>
    echo "Hello, $name!";<br>
}<br>
</code>
<p>Function Parameters: Functions can accept parameters (inputs) which are specified within the parentheses after the function name. These parameters can be used within the function.</p>
<p>Example:</p>

<code>
function add($a, $b) {<br>
    return $a + $b;<br>
}<br>
</code>
<p>Function Invocation: To execute a function, you simply use its name followed by parentheses, optionally passing any required arguments.</p>
<p>Example:</p>
<code>
greet("John"); // Output: Hello, John!<br>
$result = add(3, 5); // $result will contain the value 8<br>
</code>
<p>Return Statement: Functions can return values using the return keyword. This allows the function to pass data back to the calling code.</p>

<p>Scope: Variables declared inside a function have local scope by default, meaning they can only be accessed within that function. However, global variables can also be accessed inside functions using the global keyword.</p>

<p>Functions are essential for organizing code, making it more modular and reusable by encapsulating specific tasks into named blocks that can be easily invoked when needed.</p>
<hr>
<a href="WP04_controlStructure.php" class="previous">Previous</a>

<a href="WP06_array.php" class="next">Next</a>
<hr>
<?php
$a = 4;
$b = 6;

function add($a , $b){
    $c = $a + $b;
    return $c;
}
function sub($a , $b){
    return $a - $b;
}

$rs = add(8, 7);
echo $rs."<br>";

echo add($a, $b)."<br>";

echo sub($a, $b)."<br>";

function hello($name){
    echo "Hello ".$name;
}
hello("Nayan");
echo "<br>";
function sayHello(){
    echo "Hello!!!";
}
sayHello();
?>
</body>
</html>