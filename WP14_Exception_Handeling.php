<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="static\style.css">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="n1">
            Number 1:
        </label>
        <input type="number" name="n1" id="n1" required>
        <br>
        <label for="n2">
            Number 2:
        </label>
        <input type="number" name="n2" id="n2" required>
        <br>
        <input type="submit" value="submit">
    </form>



    <?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $n1 = (double) $_POST["n1"];
        $n2 = (double) $_POST["n2"];

        print($n1);
        print("<br>");
        print($n2);
        echo "<hr>";

        try
        {
            if ($n2 == 0){
                throw new Exception("DIVIDE BY 0:");
            }
            $n3 = $n1 / $n2;
            echo "Result: ";
            print("$n3");
        }
        catch (Exception $e){
            echo "<b style='color:red;'>Error: </b>";
            echo $e->getMessage();
        }
        finally{
            echo "<br>BYE</b>";
        }
    }
    ?>
    <hr>
    <a href="WP13_Empty_form_field_handel.php" class="previous">Previous</a>

    <a href="#" class="next">Next</a>

    
</body>


</html>