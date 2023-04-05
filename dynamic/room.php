<php 
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Latihan PHP </title>
    </head>
    <body>
        <h1>
        <?php
        if ($id == 1) {
            echo "<h1> Musholla </h1>";
        } elseif ($id == 2) {
            echo "Dapur";
        } elseif ($id == 3) {
            echo "Lobby";
        }
        ?>
        </h1>

    </body>
</html>