<!DOCTYPE html>
<html>

<head>
<title>Unggah Multiple Gambar</title>
</head>

<body>
    <form id="upload-form" action="upload_ajax2.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file[]" id="file" multiple>
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upload2.js"></script>
</body>

</html>