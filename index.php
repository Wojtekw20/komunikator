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
    <title>PHP-only Komunikator</title>
</head>
<body>

<h2>PHP-only Komunikator</h2>
<p>Jesteś: <b><?= $user ?></b></p>

</body>
</html>
