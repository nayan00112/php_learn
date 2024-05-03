<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $host = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'addnote';
    $port = 3306;

    $conn = new mysqli($host, $username, $password, $dbname, $port);

    if ($conn->connect_error) {
        die("Connection failed with DB. " . $conn->connect_error);
    } else {
        $sql = "SELECT * FROM `addnote`.`notes`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row["idnotes"] . " - Title: " . $row["title"] . " - Description:  " . $row["description"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }
    ?>
</body>

</html>