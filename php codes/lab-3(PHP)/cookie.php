<?php
// Set a cookie with a name, value, and expiration time (e.g., 1 hour from now)
setcookie("user_name", "Saroj", time() + 3600, "/");

// Check if the cookie is set and display its value
if (isset($_COOKIE["user_name"])) {
    $userName = $_COOKIE["user_name"];
    echo "Welcome back, $userName!";
} else {
    echo "Cookie not set. Welcome, guest!";
}
?>
