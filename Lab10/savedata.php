<?php
// save_data.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];

    // File path in a non-public folder
    $filePath = "/home/zahid/webtechsavedata/data.txt";

    // Open the file in append mode
    $file = fopen($filePath, "a");

    // Write the data to the file
    fwrite($file, $firstName . " " . $lastName . PHP_EOL);

    // Close the file
    fclose($file);

    // Redirect back to the form page
    header("Location: index.html");
    exit();
}
?>

