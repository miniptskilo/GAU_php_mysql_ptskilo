$folder = $_POST["folder"];

$files = glob("$folder/*.txt");

if ($files) {
    $out = fopen("summary.txt", "w");

    foreach ($files as $file) {
        $f = fopen($file, "r");
        $data = fread($f, filesize($file));
        fclose($f);

        fwrite($out, $file . "\n" . $data . "\n\n");
    }

    fclose($out);
} else {
    echo "არ არის txt ფაილები";
}