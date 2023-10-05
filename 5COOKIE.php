<?php
// Check if the cookie exists
if(!isset($_COOKIE['danielsCookie'])) {
    // If there is no stored cookie a new one is made
    $cookieValue = "This is daniels cookie";
    //Creating the cookie with an expire timer
    setcookie("danielsCookie", $cookieValue, time() + 3600);
    echo "Cookie created with value: " . $cookieValue;
} else {
    // If there is a stored cookie it is read by the script
    $cookieValue = $_COOKIE['danielsCookie'];
    echo "Cookie value is: " . $cookieValue;
}
?>
