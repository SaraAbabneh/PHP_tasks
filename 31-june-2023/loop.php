<?php
$sum=0;
for($i = 0; $i<=30 ;$i++){
    $sum+=($i);

}
echo("sum = " . $sum);
echo("<br>");	
echo("<br>");	

for($i = 1; $i<=5 ;$i++){
    for($j = 1; $j<=5;$j++){
        if($i!==$j){
            echo(0);
            echo(" ");
        }
        if($i==$j){
            echo($i);
            echo(" ");
        }
    }
    echo("<br>");
};

$product=1;
for($i = 1; $i<=5;$i++){

    $product*=$i;
}
echo("the product of 5! = " . $product);
echo("<br>");

function fibonacci($n) {
    $fib = array(0, 1);

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib;
}

$sequenceLength = 10; 

$fibonacciSequence = fibonacci($sequenceLength);

for ($i = 0; $i < $sequenceLength; $i++) {
    echo $fibonacciSequence[$i] . " ";
};
echo("<br>");

$number=1;
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $number . " ";
        $number++;
    }
    echo("<br>");
};





?>