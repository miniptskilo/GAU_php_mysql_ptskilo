function task4() {
    $f = fopen("numbers.txt", "w");

    for ($i=0; $i<10; $i++) {
        fwrite($f, rand(1,100) . "\n");
    }
    fclose($f);

    $f = fopen("numbers.txt", "r");
    $sum = 0;

    while (!feof($f)) {
        $line = fgets($f);
        if ($line != "") {
            echo $line . "<br>";
            $sum += $line;
        }
    }

    fclose($f);
    echo "ჯამი: $sum";
}
task4();