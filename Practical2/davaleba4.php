<?php

$cars = array(

array(
"Make"=>"Toyota",
"Model"=>"Corolla",
"Color"=>"White",
"Mileage"=>24000,
"Status"=>"Sold"
),

array(
"Make"=>"Toyota",
"Model"=>"Camry",
"Color"=>"Black",
"Mileage"=>56000,
"Status"=>"Available"
),

array(
"Make"=>"Honda",
"Model"=>"Accord",
"Color"=>"White",
"Mileage"=>15000,
"Status"=>"Sold"
)

);

echo "<table border='1'>";

echo "<tr>
<th>Make</th>
<th>Model</th>
<th>Color</th>
<th>Mileage</th>
<th>Status</th>
</tr>";

for($i=0;$i<count($cars);$i++){

echo "<tr>";

echo "<td>".$cars[$i]["Make"]."</td>";
echo "<td>".$cars[$i]["Model"]."</td>";
echo "<td>".$cars[$i]["Color"]."</td>";
echo "<td>".$cars[$i]["Mileage"]."</td>";
echo "<td>".$cars[$i]["Status"]."</td>";

echo "</tr>";

}

echo "</table>";

?>