<?php

// variables
$MyName = "Chanchal";
$Course = "Core PHP";
$City = "Kapurthala";

echo($MyName);
echo("<br>");
echo($Course);
echo("<br>");
echo($City);
echo("<br>");

// conditions(if..else)
$marks = 55;
if($marks >= 40){
    echo("Pass <br>");
}
else{
    echo("fail");
}

// Array
$colors = ["black", "red", "voilet", "white", "mint"];
echo($colors[2]);

// loops(foreach)
foreach($colors as $color){
    echo("<br> $color");
}
?>