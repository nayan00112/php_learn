<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="static\style.css">

</head>

<body>
    <h1>Recived data</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if (isset($_FILES["file"])){
        $f = $_FILES["file"];

        $filename= $f["name"];
        $fileTempName = $f["tmp_name"];
        $fileSize = $f["size"];
        $fileerror = $f["error"];
        $fileType = $f["type"];

        echo "filename : ".$filename."<br>";
        echo "fileTempName : ".$fileTempName."<br>";
        echo "fileSize : ".$fileSize."<br>";
        echo "fileerror : ".$fileerror."<br>";
        echo "fileType : ".$fileType."<br>";

        $targetDirectory = "uplodes/";

        $targetPath = $targetDirectory . $filename;
        move_uploaded_file($fileTempName,$targetPath);
        echo "file uploded.";
    }
    else{
        echo "Not file uploded";
    }
}


?>
        <hr>
    <a href="WP10_POST_FORM.html" class="previous">Previous</a>

    <a href="WP13_Empty_form_field_handel.php" class="next">Next</a>

</body>

</html>