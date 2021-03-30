<?php
$mahasiswa = [['Nova', '17510024', 'Sistem Informasi', 'nova_17510024@stimata.ac.id'], ['Siregar', '17510024', 'Sistem Informasi', 'nova_17510024@stimata.ac.id']];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <?php foreach ($mhs as $m) : ?>
                <li><?php echo $m; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</body>

</html>