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
