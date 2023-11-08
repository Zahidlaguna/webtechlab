<?php
if (isset($_COOKIE['cs4413'])) {
    echo "The 'cs4413' cookie is already set with the value: " . $_COOKIE['cs4413'];
} else {
    $cookieValue = "hello there";
    $expirationTime = time() + 3600;
    setcookie('cs4413', $cookieValue, $expirationTime, '/');

    echo "The 'cs4413' cookie has been set with the value: " . $cookieValue;
}
?>
