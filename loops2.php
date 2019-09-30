<?php
?>

<!DOCTYPE html>
    <head>
        <title>loops2</title>
        <style>
            body {
                text-align: center;
                font-family: "arial", sans-serif;
                font-size: 25px;
            }
            .black {
                border:black solid 5px;
            }
            .purple {
                border: purple solid 5px;
            }
            img{
                width: 490px;
                height: 490px;
            }
        </style>
    </head>
    <body>
    <a href="index.php">back to main menu<a/>
        <br>

<?php
    for ($i = 1; $i<=9 ;$i++) {
        if ($i % 2 == 0) {
            $class = "class='black'";
        } else {
            $class = "class='purple'";
        }
        echo "<img ".$class. "src='img/aap".$i.".jpg'>";
    }



?>

