<?php

$matrix = array();

for($i=0;$i<4;$i++){

for($j=0;$j<4;$j++){

$matrix[$i][$j] = rand(10,100);

}

}

for($i=0;$i<4;$i++){

for($j=0;$j<4;$j++){

echo $matrix[$i][$j]." ";

}

echo "<br>";

}

if(isset($_POST["row"])){

$x = $_POST["row"];

echo "<br>სტრიქონი $x : ";

for($j=0;$j<4;$j++){
echo $matrix[$x][$j]." ";
}

}

?>

<form method="post">
სტრიქონის ნომერი:
<input type="number" name="row">
<button type="submit">ნახვა</button>
</form>