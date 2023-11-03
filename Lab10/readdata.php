<?php
$filepath = "/home/zahid/webtechsavedata/data.txt";

$filecontent = file($filepath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

echo '<table>';
foreach ($dataArray as $data) {
    echo '<tr><td>' . $data . '</td></tr>';
}
echo '</table>';
?>