<?php
$conn = mysqli_connect("localhost","root","root","simple_db");

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
?>
