<?php
$conn = mysqli_connect("localhost","root","root","reservation_db");
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
?>