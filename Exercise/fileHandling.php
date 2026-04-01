 <?php
// $file = "test.txt";

// $fid = fopen($file, "w");
// fwrite($fid, "Hello World");
// fclose($fid);

// $fid = fopen($file, "r");
// $data = fread($fid, filesize($file));
// fclose($fid);


// echo $data;





// $file = "user.txt";
// $content = $_GET['f-content'] ?? "";

// if(empty($content)){
//     echo "ტექსტი ცარიელია!";
//     exit;
// }


// $fid = fopen($file, "w");
// fwrite($fid, $content);
// fclose($fid);


// $fid = fopen($file, "r");
// $data = fread($fid, filesize($file));
// fclose($fid);

// echo $data;





// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

// $file = "user.txt";
// $content = $_GET['f-content'] ?? "";

// if(empty($content)){
//     echo "ტექსტი ცარიელია!";
//     exit;
// }


// if(file_exists($file)){
//     $fid = fopen($file, "a"); // დამატება
// } else {
//     $fid = fopen($file, "w"); // შექმნა
// }


// fwrite($fid, $content . "\n");
// fclose($fid);


// $fid = fopen($file, "r");
// $data = fread($fid, filesize($file));
// fclose($fid);


// echo "<br>ფაილის შიგთავსი:<br>";
// echo nl2br($data);








$file = "log.txt";

$date = date("Y-m-d H:i:s");

$text = $date . " - User visited\n";

$fid = fopen($file, "a");
fwrite($fid, $text);
fclose($fid);

$fid = fopen($file, "r");
$data = fread($fid, filesize($file));
fclose($fid);

echo "<h3>Log:</h3>";
echo nl2br($data);






// $dir = "files";

// // თუ არ არსებობს → შექმნა
// if(!file_exists($dir)){
//     mkdir($dir);
//     echo "საქაღალდე შეიქმნა<br>";
// } else {
//     echo "საქაღალდე უკვე არსებობს<br>";
// }

// // ფაილების შექმნა + ჩაწერა
// $f1 = fopen($dir . "/file1.txt", "w");
// fwrite($f1, "Hello from file 1");
// fclose($f1);

// $f2 = fopen($dir . "/file2.txt", "w");
// fwrite($f2, "Hello from file 2");
// fclose($f2);

// $f3 = fopen($dir . "/file3.txt", "w");
// fwrite($f3, "Hello from file 3");
// fclose($f3);

// // ფაილების სია
// $files = scandir($dir);

// echo "<h3>ფაილების სია:</h3>";

// for($i = 2; $i < count($files); $i++){
//     echo $files[$i] . "<br>";
// }







// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

// $dir = $_GET['folder'] ?? "";

// // ცარიელი ველის შემოწმება
// if(empty($dir)){
//     echo "შეიყვანე საქაღალდის სახელი!";
//     exit;
// }

// // თუ არ არსებობს → შექმნა
// if(!file_exists($dir)){
//     mkdir($dir);
//     echo "საქაღალდე შეიქმნა!";
// } else {
//     echo "საქაღალდე არსებობს<br><br>";

//     // შიგთავსის ნახვა
//     $files = scandir($dir);

//     if(count($files) <= 2){
//         echo "საქაღალდე ცარიელია";
//     } else {
//         echo "<h3>შიგთავსი:</h3>";

//         for($i = 2; $i < count($files); $i++){
//             echo $files[$i] . "<br>";
//         }
//     }
// }
?>



