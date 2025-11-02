<!DOCTYPE html>
<html>
<head>
    <title>Form Validasi (AJAX + Password)</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <h1>Form Input dengan Validasi AJAX</h1>
    
    <form id="myForm">
    
        <div>
            <label for="nama">Nama: </label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color: red;" class="error"></span>
        </div>
        <br>
        
        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color: red;" class="error"></span>
        </div>
        <br>
        
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span id="password-error" style="color: red;" class="error"></span>
        </div>
        <br>
        
        <input type="submit" value="Submit">
    
    </form>

    <div id="hasil-ajax" style="margin-top: 20px;"></div>

<script>
$(document).ready(function() {
    $("#myForm").submit(function(event) {
        event.preventDefault(); 
        
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
        
        if (password.length < 8) {
            $("#password-error").text("Password minimal 8 karakter.");
            valid = false;
        } else {
            $("#password-error").text(""); 
        }
        
        if (valid) {
            var formData = $("#myForm").serialize();
            
            $.ajax({
                type: "POST",
                url: "proses_validasi.php", 
                data: formData,
                success: function(response) {
                    $("#hasil-ajax").html(response);
                },
                error: function() {
                    $("#hasil-ajax").html("Terjadi kesalahan saat menghubungkan ke server.");
                }
            });
        }
    });
});
</script>

</body>
</html>