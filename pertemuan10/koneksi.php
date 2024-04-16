<?php
$conn = new mysqli("localhost","root","","prakwebdb");

if ($conn -> connect_errno) {
    die("Koneksi database gagal" . mysqli_connect_error());
}
?>