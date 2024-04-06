<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Aman</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="email">Email :</label>
    <input type="text" name="email" id="email" required><br><br> <!-- Ganti name menjadi "email" -->

    <input type="submit" name="submit" value="Submit">
</form>
<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; // Mengambil nilai dari input email
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); // Mengamankan nilai email

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<div>' . $email . '</div>'; // Menampilkan email dalam div
    } else {
        echo 'Email yang Anda masukkan tidak valid';
    }
}
?>

</body>
</html>
