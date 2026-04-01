$file = $_POST["file"] ?? "";

if (file_exists($file) && is_file($file)) {
    unlink($file);
    echo "წაიშალა";
} else {
    echo "ფაილი ვერ მოიძებნა";
}