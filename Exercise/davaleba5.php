function task5() {
    $f = fopen("log.txt", "a");
    fwrite($f, date("Y-m-d H:i:s") . " - User visited\n");
    fclose($f);

    $f = fopen("log.txt", "r");
    while (!feof($f)) {
        echo fgets($f) . "<br>";
    }
    fclose($f);
}
task5();