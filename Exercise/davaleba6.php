function task6() {
    mkdir("files");

    $f1 = fopen("files/file1.txt", "w"); fwrite($f1, "Text1"); fclose($f1);
    $f2 = fopen("files/file2.txt", "w"); fwrite($f2, "Text2"); fclose($f2);
    $f3 = fopen("files/file3.txt", "w"); fwrite($f3, "Text3"); fclose($f3);

    print_r(scandir("files"));
}
task6();