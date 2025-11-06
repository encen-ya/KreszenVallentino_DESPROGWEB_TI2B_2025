<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $extensions = array("jpg", "jpeg", "png", "gif");
    $targetDirectory = "uploads/"; 

    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];

        $file_ext_parts = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext_parts));

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "File $file_name: Ekstensi tidak diizinkan (hanya jpg, jpeg, png, gif).";
        }

        if ($file_size > 2097152) { 
            $errors[] = "File $file_name: Ukuran file tidak boleh lebih dari 2 MB.";
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, $targetDirectory . $file_name);
        }
    }

    if (empty($errors)) {
        echo "Semua file gambar berhasil diunggah.";
    } else {
        echo implode("<br>", $errors);
    }
}
?>