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
    include '../Home/koneksi.php';
    // menangkap data yang di kirim dari form
    $kode = $_POST['code'];
    $bran = $_POST['brand'];
    $typ = $_POST['type'];
    $stok = $_POST['stock'];
    $pric = $_POST['price'];
    $pictur = $_POST['picture'];
    // update data ke database
    mysqli_query($conn,"update gitar set code='$kode', brand='$bran', type='$typ', stock='$stok', price='$pric', picture='$pictur' where code='$kode'");
    // mengalihkan halaman kembali ke index.php
    header("location:product.php");
    ?>
</body>
</html>