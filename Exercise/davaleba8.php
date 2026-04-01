$folder = $_POST["folder"] ?? "";

if (is_dir($folder)) {
    foreach (scandir($folder) as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) == "txt") {
            echo $file . "<br>";
        }
    }
}