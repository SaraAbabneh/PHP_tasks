<?php

$color=['white', 'green', 'red'];
shuffle($color);
foreach ($color as $value){
    echo($value);
    echo("<br>");
}
echo("<br>");


$ciy=array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

asort($ciy);
foreach($ciy as $x=>$value)
{
    echo("The capital of ".$x." "." ".$value);
    echo("<br>");

}
$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
print($color [4]);

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

foreach($fruits as $x=>$value){
    echo($x ."=".$value);
    echo("<br>");
}





$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

$lengths = array_map('strlen', $words);

$maxlength = max($lengths);
$minlength = min($lengths);
echo("<br>");
echo "Maximum Length: " . $maxlength ;
echo("<br>");
echo "Minimum Length: " . $minlength ;





?>