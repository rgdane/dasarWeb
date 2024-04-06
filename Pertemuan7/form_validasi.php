<!DOCTYPE html>
<html>
<head>
<title>Form Input dengan Validasi</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div id="response"></div>

<h1>Form Input dengan Validasi</h1>
<form id="myForm">
<label for="nama">Nama :</label>
<input type="text" id="nama" name="nama">
<span id="nama-error" style="color: red;"></span><br>

<label for="email">Email :</label>
<input type="text" id="email" name="email">
<span id="email-error" style="color: red;"></span><br>

<label for="password">Password :</label>
<input type="password" id="password" name="password">
<span id="password-error" style="color: red;"></span><br>

<input type="button" value="Submit" id="submitBtn">
</form>

<script>
$(document).ready(function() {
    $("#submitBtn").click(function() {
        var nama = $("#nama").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var valid = true;

        if (nama === "") {
            $("#nama-error").text("Nama harus diisi.");
            valid = false;
        } else {
            $("#nama-error").text("");
        }
        if (email === "") {
            $("#email-error").text("Email harus diisi.");
            valid = false;
        } else {
            $("#email-error").text("");
        }
        if (password === "") {
            $("#password-error").text("Password harus diisi.");
            valid = false;
        } else if (password.length < 8) {
            $("#password-error").text("Password minimal 8 karakter.");
            valid = false;
        } else {
            $("#password-error").text("");
        }
        if (valid) {
            $.ajax({
                type: "POST",
                url: "proses_validasi.php", // Ganti dengan URL tempat Anda memproses formulir
                data: $("#myForm").serialize(),
                success: function(response) {
                    $("#response").html(response);
                }
            });
        }
    });
});
</script>

</body>
</html>
