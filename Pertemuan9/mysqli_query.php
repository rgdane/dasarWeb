<?php
$conn = new mysqli("localhost","root","","prakwebdb");

if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

// Membuat tabel user
$query = "CREATE TABLE `prakwebdb`.`user` (`id` INT NOT NULL , `username` VARCHAR(50) NOT NULL ,
    `password` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`));";
mysqli_query($conn, $query);

// Menginput data ke tabel user
$query2 = "INSERT INTO `user` (`id`, `username`, `password`) VALUES ('1', 'admin', MD5('123'));";
mysqli_query($conn, $query);

?>