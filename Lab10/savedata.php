<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];

   
    $filePath = "/home/zahid/webtechsavedata/data.txt";


    $file = fopen($filePath, "a");

  
    fwrite($file, $firstName . " " . $lastName . PHP_EOL);


    fclose($file);

    header("Location: index.html");
    exit();
}
?>

