<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link rel="stylesheet" href="static\style.css">
</head>

<body>
    <h1>6. Array</h1>
    <p>In PHP, an array is a versatile data structure that stores multiple values in a single variable. Here's an
        overview of arrays in PHP:</p>

    <p>
    <h3>Indexed Arrays: These arrays use numeric keys to store values.</h3>
    </p>
    Example:
    <code>
$fruits = array("Apple", "Banana", "Orange");<br>
// or, in newer PHP versions:<br>
$fruits = ["Apple", "Banana", "Orange"];<br>
echo $fruits[0]; // Outputs: Apple<br>
</code>
    <p>
    <h3>Associative Arrays: These arrays use named keys to store values.</h3>
    </p>
    Example:
    <code>
$person = array("name" => "John", "age" => 30, "city" => "New York");<br>
// or, in newer PHP versions:<br>
$person = ["name" => "John", "age" => 30, "city" => "New York"];<br>
echo $person["name"]; // Outputs: John<br>
</code>
    <p>
    <h3>Multidimensional Arrays: Arrays within arrays, creating a multi-level structure.</h3>
    </p>
    Example:
    <code>
$matrix = array(<br>
    array(1, 2, 3),<br>
    array(4, 5, 6),<br>
    array(7, 8, 9)<br>
);<br>
echo $matrix[1][2]; // Outputs: 6<br>
</code>
    <p>Array Functions: PHP provides numerous built-in functions to manipulate arrays, like <b>count, array_push,
            array_pop, array_merge, array_keys, array_values, and more.</b></p>
    <p>Arrays in PHP are incredibly flexible and can store different types of data. They're widely used for storing
        collections of items, managing form data, and working with databases.</p>

    <h3>Function of array:</h3>
    <p> Here's an example demonstrating various array functions in PHP:</p>

    <code>
// Sample array<br>
$numbers = array(1, 2, 3, 4, 5);<br>
<br>
// 1. count - Count the number of elements in an array<br>
$count = count($numbers);<br>
echo "Number of elements: $count<br>";<br>
<br>
// 2. array_push - Push one or more elements onto the end of an array<br>
array_push($numbers, 6, 7);<br>
print_r($numbers);<br>
echo "<br>";<br>
<br>
// 3. array_pop - Pop the element off the end of array<br>
$popped = array_pop($numbers);<br>
echo "Popped element: $popped<br>";<br>
<br>
// 4. array_merge - Merge one or more arrays<br>
$colors1 = array("red", "green");<br>
$colors2 = array("blue", "yellow");<br>
$mergedColors = array_merge($colors1, $colors2);<br>
print_r($mergedColors);<br>
echo "<br>";<br>
<br>
// 5. array_keys - Return all the keys or a subset of the keys of an array<br>
$keys = array_keys($numbers);<br>
print_r($keys);<br>
echo "<br>";<br>
<br>
// 6. array_values - Return all the values of an array<br>
$values = array_values($numbers);<br>
print_r($values);<br>
echo "<br>";<br>
<br>
// 7. in_array - Checks if a value exists in an array<br>
$checkValue = 3;<br>
if (in_array($checkValue, $numbers)) {<br>
    echo "$checkValue exists in the array<br>";<br>
} else {<br>
    echo "$checkValue does not exist in the array<br>";<br>
}<br>
<br>
// 8. array_reverse - Return an array with elements in reverse order<br>
$reversedNumbers = array_reverse($numbers);<br>
print_r($reversedNumbers);<br>
echo "<br>";<br>
<br>
// 9. array_sum - Calculate the sum of values in an array<br>
$sum = array_sum($numbers);<br>
echo "Sum of elements: $sum<br>";<br>
<br>
// 10. array_filter - Filters elements of an array using a callback function<br>
$filteredNumbers = array_filter($numbers, function ($value) {<br>
    return $value % 2 == 0; // Keep only even numbers<br>
});<br>
print_r($filteredNumbers);<br>
</code>
    <p>
        This example covers various array functions in PHP, such as count, array_push, array_pop, array_merge,
        array_keys, array_values, in_array, array_reverse, array_sum, and array_filter. Each function performs a
        specific task on the given array.
    </p>

    <h2>What is print_r()?</h2>

    <p>print_r() is a built-in PHP function used for printing human-readable information about a variable. It is
        particularly useful for debugging and examining the structure of arrays and objects. The function is not meant
        for production use or formatting data for end-users; rather, it's a developer tool.</p>

    <p>The basic syntax of print_r() is:</p>
    <code>
print_r($variable);<br></code>
    <p>Here's a quick example:</p>
    <code>
$fruits = array("Apple", "Banana", "Orange");<br>
print_r($fruits);<br>
</code>
    <p>Output:</p>

    <code>
Array<br>
(<br>
    [0] => Apple<br>
    [1] => Banana<br>
    [2] => Orange<br>
)<br>
</code>
    <p>In the output, you can see the structure of the array, with keys and values displayed in a readable format. For
        associative arrays, you will see both keys and values.</p>

    <p>Additionally, print_r() can be used to print the details of objects:</p>
    <code>
class Person {<br>
    public $name = "John";<br>
    public $age = 30;<br>
}<br>
$person = new Person();<br>
print_r($person);<br>
</code>
    <p>Output:</p>

    <code>
Person Object<br>
(<br>
    [name] => John<br>
    [age] => 30<br>
)<br>
</code>
    <p>This function is handy during the development process when you need a quick overview of the contents and
        structure of a variable.</p>



    <hr>
    <a href="WP05_function.php" class="previous">Previous</a>

    <a href="WP07_supergloble.php" class="next">Next</a>
    <hr>

    <?php
    $a = array("appel", "mango", "34", 45); // valid (string and int!)
    $b = array("nayan", "jignesh", "rudra");
    $c = array(34, 56, 67, 43);
    $d = array(" ");

    echo $a[3] . "<br>";
    echo $b[0] . "<br>";
    echo $c[1] . "<br>";
    echo $d[0] . "<br>";
    // echo $d . "<br>";//error : not like python..
    
    // echo $a[5] . "<br>"; // error: Warning: Undefined array key 5 in C:\xampp\htdocs\nayanprojects\WP06_array.php on line 68
    
    $p = [3, 5, 6, "nayan", "45", 34.56];
    echo $p[1] . "<br>";

    $q = ["nayan", "patel", "34", 443];
    echo $q[0] . "<br>";

    $r = array("name" => "Nayan Patel", "email" => "nayan1@g.c", "address" => "92, vijaynagar society");
    echo $r["name"] . "<br>";

    $s = ["name" => "Nayankumar", "email" => "nayan123@g.c"];
    echo $s["email"] . "<br>";

    $matrix = array(
        array(4, 6, 8),
        array(5, 3, 1),
        array(5, 8, 2)
    );

    echo $matrix[0][1] . "<br>";

    $m2 = [
        [4, 8, 1],
        [1, 2, 5],
        [5, 7, 9]
    ];
    echo $m2[1][2] . "<br>";
    print_r($matrix);
    // echo $m2."<br>"; // error
    // echo $m2[1]."<br>"; //error
    echo "array functions:<br>";


    echo "<i>Array na function karvana che have</i>";

    // 1.
    $arr1 = ["4", "nayan", 34, "oky"];
    $c =  count($arr1);
    echo $c."<br>";

    // 2
    array_push($arr1, 3, 4);
    print_r($arr1);
    echo "<br>";

    // 3
    $pop = array_pop($arr1);
    echo "popped element: ".$pop."<br>";
    print_r($arr1);
    echo "<br>";

    // 4
    $a1 = [3,4 ,5, "56"];
    $b1 = [4, 3, "23", "4"];
    $ab = array_merge($a1, $b1);
    print_r($ab);
    echo "<br>";

    // 5 
    $student = ["name" => "nayan", "email" => "nayan123@g.c", "address" => "92, vijaynagar"];
    print_r($student);
    echo "<br>";
    $keys = array_keys($student);
    print_r($keys);
    echo "<br>";

    // 6
    $arrvalues = array_values($student);
    print_r($arrvalues);
    echo "<br>";

    // 7
    $k = "email";
    $bool =in_array($k, $arrvalues);
    echo $bool."<hr>"; // not displayed !!! why ?
    echo $bool ?"True":"False";
    echo "<br>";

    // 8
    $num = [1 ,3, 6, 8, 9];
    $numr = array_reverse($num);
    print_r($numr);
    echo "<br>";

    // 9
    $n = [2, 5, 76, 7, 8];
    $sum = array_sum($n);
    print_r($sum);
    echo "<br>";

    // 10

    $af = array_filter($n, function($v) { return $v%2==0; });
    print_r($n);
    echo "<br>";
    print_r($af);
    echo "<br>";

    ?>

</body>

</html>