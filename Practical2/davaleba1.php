<?php
    $arr = array();
    for($i=0; $i<12; $i++){
        $arr[$i] = rand(10,100);
    }

    print_r($arr);

    if(isset($_POST["x"])){
        $x = $_POST["x"];

        echo "ელემენტი ინდექსზე $x არის: ".$arr[$x];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="number">შეიყვანეთ ინდექსი:</label>
        <input type="number" name="x">
        <button type="submit">ნახვა</button>
    </form>
</body>
</html>