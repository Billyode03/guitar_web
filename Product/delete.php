<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // koneksi database
    include "../Home/koneksi.php";
    // menangkap data id yang di kirim dari url
    $kode = $_GET['code'];
    // menghapus data dari database
    mysqli_query($conn,"delete from gitar where code='$kode'");
    // mengalihkan halaman kembali ke index.php
    header("location:product.php");
    ?>
</body>
</html>