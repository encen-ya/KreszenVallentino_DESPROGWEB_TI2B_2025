<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    
    $errors = array();
    
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }
    
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }
    
    if (empty($password)) {
        $errors[] = "Password harus diisi.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password minimal 8 karakter.";
    }
    
    if (empty($errors)) {
        
        echo "<div style='color: green;'>Data berhasil dikirim:</div>";
        echo "Nama: " . htmlspecialchars($nama) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        
    } else {
        echo "<div style='color: red;'>Terjadi kesalahan:</div>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>" . $error . "</li>";
        }
        echo "</ul>";
    }
    
} else {
    echo "Akses tidak diizinkan.";
}
?>