<!DOCTYPE html>
<html>
<head>
    <title>Validasi Input</title>
</head>
<body>
    <h2>Form Validasi Email</h2>
    <form method="post" action="">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <input type="submit" value="Submit">
    </form>
    <hr>
    <h3>Hasil Validasi:</h3>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email '$email' adalah valid.";
        } else {
            echo "Format email '$email' tidak valid.";
        }
    }
    ?>
</body>
</html>