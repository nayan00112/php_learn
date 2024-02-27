<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGloble</title>
    <link rel="stylesheet" href="static/style.css">
</head>
<body>
<h1>Superglobals</h1>

<p>Superglobals in PHP are special arrays that are always available and can be accessed from any scope or function within a script. They provide essential information and data related to the server, client, and other runtime details. Some commonly used superglobals include:</p>
<ul>
<li><b>$_GET:</b> Contains variables passed to the current script via URL parameters (GET method).</li>

<li><b>$_POST:</b> Holds variables passed to the current script via HTTP POST method (form submissions).</li>

<li><b>$_SESSION:</b> Stores and retrieves session variables across different pages.</li>

<li><b>$_COOKIE:</b> Contains variables passed to the current script via HTTP Cookies.</li>

<li><b>$_SERVER:</b> Provides server and execution environment information.</li>

<li><b>$_FILES:</b> Holds information about uploaded files through HTTP POST.</li>

<li><b>$_ENV:</b> Stores environment variables.</li>

<li><b>$_REQUEST:</b> Contains data from $_GET, $_POST, and $_COOKIE.</li>
</ul>
<p>Example (using $_GET):</p>

<code>
// Assuming URL: http://example.com/index.php?name=John <br>
echo $_GET['name']; // Outputs: John<br>
</code>
<p>These superglobal arrays play a crucial role in PHP web development, allowing developers to access and manipulate various types of data related to the server, user input, sessions, and more.</p>
<hr>
<a href="WP06_array.php" class="previous">Previous</a>

<a href="#" class="next">Next</a>
<hr>
</body>
</html>