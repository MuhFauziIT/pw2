<?php 
//echo "Hello World";
$nama = "Muhamad Fauzi";
$jurusan = "Teknik Informatika";
$semester = 2;

echo "Nama Saya adalah : " . $nama;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum01</title>
</head>
<body>
    <h2> <?php echo $nama; ?> </h2>
    <p>
        Saya kuliah di jurusan : <?= $jurusan; ?>
    </p>
    <p>
        Saat ini saya berada di semester : <?= $semester; ?>
    </p>
</body>
</html>