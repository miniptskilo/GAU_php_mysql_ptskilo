function task10() {
    mkdir("backup");

    $f1 = fopen("data.txt", "r");
    $data = fread($f1, filesize("data.txt"));
    fclose($f1);

    $f2 = fopen("backup/data_copy.txt", "w");
    fwrite($f2, $data);
    fclose($f2);

    echo $data . "<br>";

    $f3 = fopen("backup/data_copy.txt", "r");
    echo fread($f3, filesize("backup/data_copy.txt"));
    fclose($f3);
}
task10();