<!DOCTYPE html>
<html>
<head>
    </head>
    <body>
        
        <h3> DATA DOSEN </h3>
<?php
$Dosen = [
    'nama' => 'Elok Nur Hamdana',
    'domisili' => 'Malang',
    'jenis_kelamin' => 'Perempuan'
];
?>
<table border="1">
    <thead>
    </thead>
    <tbody>
        <tr>
            <td>Nama</td>
            <td><?php echo $Dosen['nama']; ?></td>
        </tr>
        
        <tr>
            <td>Domisili</td>
            <td><?php echo $Dosen['domisili']; ?></td>
        </tr>
        
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>

</body>
</html>