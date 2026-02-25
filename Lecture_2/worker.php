<?php
    echo "<h1>worker</h1>";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    echo "<p>".$_GET['name']." სწავლობს ".$_GET['subject']."-ს</p>";

    echo "<hr><hr>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo "<p>".$_POST['name']." სწავლობს ".$_POST['subject']."-ს</p>";
?>
