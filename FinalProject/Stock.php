<?php
    $pick = $_GET['color'];
    $black = ["32gb","64gb","128gb"];
    $green = ["64gb","128gb"];
    if($pick === "Black")
        {
            foreach($black as $black){
                echo $black;
                echo " , ";
            }

        }
    else if($pick === "Green")
        {
            foreach($green as $green){
                echo $green;
                echo " , ";
            }

        }
?>