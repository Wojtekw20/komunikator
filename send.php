<?php
session_start();
$user = $_SESSION['user'];

$message = trim($_POST['message']);
if ($message === "") exit;

$messages = [];

if (file_exists("messages.json")) {
    $messages = json_decode(file_get_contents("messages.json"), true);
}

$messages[] = [
    "user" => $user,
    "message" => $message,
    "time" => date("H:i:s")
];

file_put_contents("messages.json", json_encode($messages));

echo "OK";

?>