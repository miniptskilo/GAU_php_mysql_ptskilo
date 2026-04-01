$folder = $_POST["folder"];

$files = 0;
$dirs = 0;
$size = 0;

foreach (scandir($folder) as $f) {
    if ($f == "." || $f == "..") continue;

    if (is_dir("$folder/$f")) {
        $dirs++;
    } else {
        $files++;
        $size += filesize("$folder/$f");
    }
}

echo "ფაილები: $files<br>";
echo "საქაღალდეები: $dirs<br>";
echo "ზომა: $size";