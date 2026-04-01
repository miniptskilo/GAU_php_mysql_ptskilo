$file = $_POST["file"];
$text = $_POST["text"];

$f = fopen($file, "a");
fwrite($f, $text . "\n");
fclose($f);

$f = fopen($file, "r");
echo fread($f, filesize($file));
fclose($f);