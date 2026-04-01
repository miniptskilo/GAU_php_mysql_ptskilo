$name = $_POST["folder"] ?? "";

if ($name) {
    if (!is_dir($name)) {
        mkdir($name);

        $f = fopen("$name/info.txt", "w");
        fwrite($f, "Folder: $name\nDate: " . date("Y-m-d H:i:s"));
        fclose($f);
    } else {
        echo "უკვე არსებობს";
    }
}