$src = $_POST["src"];
$dest = $_POST["dest"];

if (!is_dir($dest)) mkdir($dest);

$count = 0;

foreach (glob("$src/*.txt") as $file) {
    $name = basename($file);
    rename($file, "$dest/$name");
    $count++;
}

echo "გადატანილია: $count";