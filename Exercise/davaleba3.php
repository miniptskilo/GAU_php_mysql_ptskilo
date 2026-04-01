function task3() {
    if (file_exists("data.txt")) {
        echo "ფაილი არსებობს";
    } else {
        $f = fopen("data.txt", "w");
        fwrite($f, "New File Created");
        fclose($f);
        echo "შეიქმნა";
    }
}
task3();