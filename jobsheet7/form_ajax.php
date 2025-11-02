<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP dan jQuery</title> [cite: 167]
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
</head>
<body>
    <h2>Form Contoh</h2>
    <form id="myForm"> [cite: 172]
        <label for="buah">Pilih Buah: </label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br>
        <label>Pilih Warna Favorit:</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>
        <br>
        <label>Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki <br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>
        <br>
        <input type="submit" value="Submit"> [cite: 188]
    </form>
    
    <div id="hasil"> [cite: 190]
        Hasil akan ditampilkan di sini [cite: 192]
    </div>

    <script>
    $(document).ready(function () { [cite: 194]
        $("#myForm").submit(function (e) { [cite: 195]
            e.preventDefault(); [cite: 196]
            
            var formData = $("#myForm").serialize(); [cite: 198]
                       
            $.ajax({ [cite: 200]
                url: "proses_lanjut.php", 
                type: "POST", [cite: 202]
                data: formData, [cite: 203]
                success: function (response) { [cite: 204]
                    $("#hasil").html(response); [cite: 205]
                }
            });
        });
    });
    </script>
</body>
</html>