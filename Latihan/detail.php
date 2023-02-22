<?php
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];
// query berdasarkan id
$m = query("SELECT * FROM my_bias WHERE No = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail My Bias</title>
</head>

<body>
  <h3>Detail My Bias</h3>
  <ul>
    <li>No : <?= $m['No']; ?></li>
    <li>Nama : <?= $m['Name']; ?></li>
    <li>Birthday : <?= $m['Birthday']; ?></li>
    <li>Position : <?= $m['Position']; ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan3.php">kembali ke list</a></li>
  </ul>
</body>

</html>