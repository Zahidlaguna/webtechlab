<?php

if($_SERVER["REQUEST METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];

    $filepath = $_POST["filepath"];

    $file = fopen($filepath, "a");
    fwrite($file,"$firstname $lastname\n" . PHP_EOL);

    fclose($file);

    header("location: index.html");
    exit();

}
?>

<?php
$filepath = "names.txt";
$filecontent = file($filepath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
echo "<ul>";
foreach ( $filecontent as $line ) {
    echo"". $line ."";
}
echo"</ul>";
?>