<?php
$year = 2013;
if ($year % 400 == 0) {
    echo $year." This year is a leap year";
 } elseif ($year % 100 == 0) {
    echo $year." This year is not a leap year";
 } elseif ($year % 4 == 0) {
    echo $year." This year is a leap year";
 } else {
    echo $year." This year is not a leap year";
 };


 $temp = 21;
 if ($temp<20){
    echo " we are in winter <br> ";
 }else{
    echo "the season is summer <br>";
 };

 $num1= 1;
 $num2= 2 ;
 if($num1!=$num2){
    echo ("the sum of the two integers =" . $num1+$num2);
 }else {
    echo("the triple of their sum  = " . 3*($num1+$num2));
 };
 echo("<br>");

 $num3=10;
 $num4=20;
 if ($num3+$num4==30){
    echo(" The sum = 30  <br>");
 }  else echo(" False ");

 $num5=20 ;
 if($num5>0 && $num5%3==0){
    echo ( $num5 ." is a multiple of 3 <br>");
 }
 else{
    echo($num5 ." is not a multiple of 3 <br>");
 }
 echo("<br>");
 $num6=50;
 if(($num6>=20 )&& ($num6<=50)){
    echo("true the number betwwen (20-50) ");
 }
 echo("<br>");

 $arr=[1,5,9];
  rsort($arr);
  $thelargest=$arr[0];
 echo("find the largest number  is " . $thelargest);
 echo("<br>");


   $units=300; 
     $totalBill = 0;
 
     if ($units <= 50) {
    
         $totalBill = $units * 2.50;
     } elseif ($units <= 150) {
    
         $totalBill = 50 * 2.50 + ($units - 50) * 5.00;
     } elseif ($units <= 250) {
     
         $totalBill = 50 * 2.50 + 100 * 5.00 + ($units - 150) * 6.20;
     } else {
        
         $totalBill = 50 * 2.50 + 100 * 5.00 + 100 * 6.20 + ($units - 250) * 7.50;
     }
 
     
 
 


 $billAmount = $totalBill;
 echo "Monthly electricity bill: " . $billAmount . " JOD";

 

$age = 20;

switch (true) {
    case ($age >= 18):
        echo "Is eligible to vote";
        echo("<br>");
        break;
    default:
        echo "Is not eligible to vote";
        echo("<br>");
        break;
}

$num7 = 20;

switch (true) {
    case ($num7 >= 0):
        echo ($num7."Is positive");
        echo("<br>");
        break;

    case ($num7 <= 0):
        echo ($num7."Is negative");
        echo("<br>");
        break;
    default:
        echo ($num7."Is zero");
        echo("<br>");
        break;
};

$num8=20;
$num9=2;
$sing="/";

switch (true) {
    case ($sing == '+'):
        echo ($num9+$num8);
        echo("<br>");
        break;

    case ($sing == '-'):
        echo ($num9-$num8);
            echo("<br>");
    break;

    case ($sing == '/'):
        echo ($num9/$num8);
        echo("<br>");
        break;

    case ($sing == '*'):
        echo ($num9*$num8);
        echo("<br>");
        break;
    
};


$mark = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$length = count($mark);
$sum = 0;

foreach ($mark as $value) {
    $sum += $value;
}

$ava = $sum / $length; 

switch (true) {
    case ($ava > 90):
        echo "The grade is A";
        break;
    case ($ava > 80):
        echo "The grade is B";
        break;
    case ($ava > 70):
        echo "The grade is C";
        break;
    case ($ava > 60):
        echo "The grade is D";
        break;
    default:
        echo "The grade is F";
        break;
}











?>