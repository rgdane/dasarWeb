<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $success = 0;
    
    foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['file']['name'][$key];
        $file_size = $_FILES['file']['size'][$key];
        $file_tmp = $_FILES['file']['tmp_name'][$key];
        $file_type = $_FILES['file']['type'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $extensions = array("jpg", "jpeg", "png", "gif");
        
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
        }
        
        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file ' . $file_name . ' melebihi batas maksimum 2 MB';
        }
        
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            $success++;
        }
    }
    
    if ($success > 0) {
        echo $success . " file berhasil diunggah.";
    } else {
        echo implode("<br>", $errors);
    }
}
?>
