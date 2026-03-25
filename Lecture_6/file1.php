<?php
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    $file = $_GET['f-name'];
    $content = $_GET['f-content'];

    $file = $_GET['f-name'];
    $file = $file . ".txt";
    $file = "file1/" .$file;
    echo $file;

    $fid = fopen($file, "w");
    fwrite($fid, $content);
    fclose($fid);
?>