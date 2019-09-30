<div class="yes">
    <!DOCTYPE html>
    <html>
    <head>
        <title>loops2</title>
        <style>
            img{
                width:200px;
                heigth:200px
            }
        </style>
    </head>
    </html>
    <?php

    $zwemclubs = array(
        array("zwemclub" => "De Spartelkuikens","leden" =>"80"),
        array("zwemclub" => "De Waterbuffels","leden" =>"32"),
        array("zwemclub" => "Het Plonsmderin","leden" =>"11"),
        array("zwemclub" => "Het Bommetje","leden" =>"23"),
    )
    ?>
    <table id="ufff" border="1px">
        <?php
            foreach ($zwemclubs as $clubs){
                echo "<tr><td>".$clubs["zwemclub"]."</td>"."<td>".$clubs["leden"]."</td><td>";
                for($i = 5; $i <= $clubs["leden"]; $i+=5){
                    echo "<img src='img/zwemmers1.jpg'>";
                }
                echo "</td></tr>";
            }
        ?>
    </table>





</div>