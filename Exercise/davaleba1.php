function task1() {
    $f = fopen("test.txt", "w");
    fwrite($f, "Hello World");
    fclose($f);

    $f = fopen("test.txt", "r");
    echo fread($f, filesize("test.txt"));
    fclose($f);
}
task1();