<?php
header("Content-Type: application/json");

if (!file_exists("messages.json")) {
    file_put_contents("messages.json", "[]");
}

echo file_get_contents("messages.json");
