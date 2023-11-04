<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];

   
    $filePath = "Lab10/data/data.txt";


    $file = fopen($filePath, "a");

    if ($file) {
        
        fwrite($file, $data);

        
        fclose($file);

        echo 'Data saved successfully.';
        include('show_contents.php');
    } else {
        echo 'Failed to open the file for writing.';
    }
} else {
    echo 'Invalid request.';
}
?>

