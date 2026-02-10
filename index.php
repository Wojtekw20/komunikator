<?php
session_start();

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = "User" . rand(1000, 9999);
}
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title> Komunikator</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        #chat { border:1px solid #666; padding:10px; width:500px; height:300px; overflow:auto; margin-bottom:10px; }
        #msg { width:400px; }
        button { padding:5px 10px; }
        .message { margin:3px 0; }
        .my-message { color: blue; }
        .other-message { color: green; }
    </style>
</head>
<body>

<h2>Komunikator</h2>
<p>Jesteś: <b><?= $user ?></b></p>

<div id="chat"></div>

<input id="msg" placeholder="Napisz wiadomość...">
<button onclick="send()">Wyślij</button>

</body>
</html>
