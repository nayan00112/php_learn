<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="static\style.css">

</head>

<body>
    <h1>9. get data recive </h1>
    <?php
    echo "<hr>";
    print_r($_SERVER);
    echo "<hr>";
    echo "<hr>";
    print_r($_REQUEST);
    echo "<hr>";
    echo "<hr>";
    print_r($_GET);
    echo "<hr>";
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // $name = $_GET["name"];
        $name = isset($_GET['name']) ? $_GET['name'] : "No Name";


        // echo "Name: " . $name[0] . "";
        echo "Name: " . htmlspecialchars($name) . "<br>";

    }
    ?>

    <hr>
    <a href="WP08_GET_FORM.html" class="previous">Previous</a>

    <a href="WP10_POST_FORM.html" class="next">Next</a>
    <hr>
</body>

</html>



<!-- 

In PHP, the `htmlspecialchars()` function is used to convert special characters to HTML entities. This function is particularly useful when displaying user input on a web page to prevent cross-site scripting (XSS) attacks. 

Here's the basic syntax of `htmlspecialchars()`:

```php
htmlspecialchars($string, $flags, $encoding, $double_encode);
```

Parameters:
- `$string`: The string to be converted.
- `$flags` (optional): Specifies how to handle quotes and which quotes to convert. Default is `ENT_COMPAT | ENT_HTML401`.
- `$encoding` (optional): Specifies the encoding of the string. Default is `ini_get("default_charset")`.
- `$double_encode` (optional): A boolean parameter that determines whether to convert existing HTML entities to their respective codes. Default is `true`.

Here's a simple example of how `htmlspecialchars()` can be used:

```php
$input = '<script>alert("XSS Attack!");</script>';
$safe_input = htmlspecialchars($input);
echo $safe_input;
```

Output:
```
&lt;script&gt;alert(&quot;XSS Attack!&quot;);&lt;/script&gt;
```

In this example, the `<script>` tags and the double quotes within the `alert()` function have been converted to their HTML entity equivalents, preventing the JavaScript code from executing in the browser.

It's important to note that `htmlspecialchars()` is not a complete defense against XSS attacks and should be used in combination with other security measures, such as proper input validation and output encoding, to ensure the security of your web application.
 -->