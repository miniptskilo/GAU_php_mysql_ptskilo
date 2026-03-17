<?php

$matrix = array();

for($i=0;$i<6;$i++){

for($j=0;$j<5;$j++){

$matrix[$i][$j] = rand(1,50);

echo $matrix[$i][$j]." ";

}

echo "<br>";

}

$sum = 0;

for($i=0;$i<6;$i++){
for($j=0;$j<5;$j++){
$sum = $sum + $matrix[$i][$j];
}
}

echo "ჯამი = ".$sum;

?>