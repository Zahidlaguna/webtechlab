<?php
$filepath = "names.txt";

$filecontent = file($filepath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

echo "<ul>";

foreach ( $filecontent as $line ) {
    echo"". $line ."";
}
echo"</ul>";

?>