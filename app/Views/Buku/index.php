<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach($bukus as $buku) : ?>
    <p><?= $buku['judul']?></p>
    <p><?= $buku['pengarang']?></p>
    <p><?= $buku['tahun_terbit']?></p>
    <p><?= $buku['jumlah_halaman']?></p>
    <p><?= $buku['sinopsis']?></p>
    <?php endforeach; ?>

</body>

</html>