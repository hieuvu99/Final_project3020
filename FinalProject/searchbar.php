<?php
$Suggest =[ "Vsmart phone",
"Vsmart Tv",
"Vsmart software",
"Headphone",
"Charger",
"Laptop",
"About us",
"Buy now",
"Retailer",
"Model",
];

$searchvalue = $_REQUEST["searchbar"];

    if($searchvalue !==""){
        $searchvalue = strtolower($searchvalue);
        $len=strlen($searchvalue);
        foreach($Suggest as $Suggest)
        {
            if(stristr($searchvalue, substr($Suggest, 0, $len))){
                
                $hint = $Suggest;
                echo $hint;
                echo " , ";

            }   
        }   
    }
?>