<?php
$conn = new mysqli("localhost", "root", "","conduccion");
$conn->query("SET NAMES 'utf8'");
if ($conn->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
