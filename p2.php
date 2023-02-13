<?php

$n = 100; //series last number
$sum = 0; //summation of the series

for($i=1; $i<=$n; $i++){
    $sum +=$i;
    // echo $sum.PHP_EOL; //
}
echo $sum;