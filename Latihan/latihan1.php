<?php
// koneksi ke data base dan pilih database
$conn = mysqli_connect('localhost', 'root', '', 'ateez');

// query isi tabel data
$result = mysqli_query($conn, "SELECT * FROM my_bias");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // keduanya
// perintah  WHILE untuk looping code
// $rows = []; // array kosong yang nantinya akan diisi data tabel
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row; // untuk mengisi array $rows yg masih kosong/isi dari kurung sikunya
}
// tampung ke variable data
$my_bias = $rows; //variabel ini telah terisi dengan file database

// setelah var terisi dengan file db, lakukan looping pada kode <tr><td> dengan memasukannya ke tag <php> terlebuh dahulu 
// dengan kode <?php foreach() : ? dalam tanda kurung diisi var data / $my_bias as $m ditutup dengan <?php endforeach; ?
// lalu datanya di edit dengan masukan tag php $m yg tadi dimasukan ke foreach
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATEEZ</title>
</head>

<body>
  <h3>MY BIAS</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Birthday</th>
      <th>Position</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($my_bias as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $m['Name']; ?></td>
        <td><?= $m['Birthday']; ?></td>
        <td><?= $m['Position']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>