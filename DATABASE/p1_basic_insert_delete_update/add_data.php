<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = htmlspecialchars($_POST['title']);
        $desc = $_POST['desc'];
        $date = date("Y-m-d");

        $host = 'localhost';
        $username = 'root';
        $password = 'root';
        $dbname = 'addnote';
        $port = 3306;

        $conn = new mysqli($host, $username, $password, $dbname, $port);

        if ($conn->connect_error) {
            die("Connection failed with DB. " . $conn->connect_error);
        } else {
            // $sql = "INSERT INTP addnote.notes (title, description, date) VALUES ('" . $title . "','" . $desc . "', '" . $date . "')";
            $sql = "INSERT INTO `addnote`.`notes` (`title`, `description`, `date`) VALUES ('" . $title . "', '" . $desc . "', '" . $date . "');";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                echo "<br><a href='index.html'>Home</a>";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
        }
    } else {
        echo "Not Insert!";
    }
    ?>
</body>

</html>