<?php
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        // IP from shared internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // IP passed from a proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        // Direct IP address
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $branch = htmlspecialchars($_POST["branch"]);
    $section = htmlspecialchars($_POST["section"]);
    $ip = getUserIP(); // Added missing semicolon

    $data = "IP: $ip, Name: $name, Mail: $mail, Branch: $branch, Section: $section\n"; // Fixed string syntax and added newline
    file_put_contents("info.txt", $data, FILE_APPEND); // File write function
}
?>
