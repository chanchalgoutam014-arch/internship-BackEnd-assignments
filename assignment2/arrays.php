<?php

//task 1 : indexed array
$fruits = ["Apple","Mango","Banana","Orange","Grapes"];

$index = count($fruits);
echo("Fruits in array are :<br> ");
for($i=0; $i < $index; $i++){
    echo("$fruits[$i] <br>");
}
echo("<br>");

//task 2 : Associative Array
$info = [
    "Name"=>"Rahul",
    "Age"=>20,
    "City"=>"jalandhar"
];

echo("Value of the keys are :<br> ");
foreach($info as $key=>$data){
    echo("$info[$key]<br>");
}
echo("<br>");


?>