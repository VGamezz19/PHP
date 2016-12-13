<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

$sum = $n1 - $n2;
?>

<html>
    <head>
        <title> Resta</title>
    </head>
    <body>
        <div id = 'Resta'>
            <h1> La resta de <?php echo $n1 ?> y <?php echo $n2 ?> es = <?php echo $sum ?> </h1>
            <div>
                <form action="Menu.php">
                    <input type="submit" value="GO MENU">
                </form>
            </div>
        </div>
    </body>
</html>