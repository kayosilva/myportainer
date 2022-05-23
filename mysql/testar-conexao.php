<?php

$conn = new mysqli('localhost', 'root', '123456');

if ($conn->connect_error) {
    die('falhou' . $conn->connect_error);
}

die('sucesso');
