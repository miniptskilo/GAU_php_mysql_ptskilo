$name = $_POST["folder"] ?? "";

if ($name) {
    if (!is_dir($name)) {
        mkdir($name);
        echo "შეიქმნა";
    } else {
        print_r(scandir($name));
    }
}