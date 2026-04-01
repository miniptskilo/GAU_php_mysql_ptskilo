if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];

    if (empty($text)) {
        echo "ცარიელია!";
    } else {
        $f = fopen("user.txt", "w");
        fwrite($f, $text);
        fclose($f);

        $f = fopen("user.txt", "r");
        echo fread($f, filesize("user.txt"));
        fclose($f);
    }
}