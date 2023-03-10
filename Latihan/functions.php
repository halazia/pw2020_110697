<?php
// koneksi ke data base dan pilih database
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'ateez');
}
// query isi tabel data
function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  // ubah data ke dalam array
  // $row = mysqli_fetch_row($result); // array numerik
  // $row = mysqli_fetch_assoc($result); // array associative
  // $row = mysqli_fetch_array($result); // keduanya
  $rows = []; // array kosong yang nantinya akan diisi data tabel
  while ($row = mysqli_fetch_assoc($result)) {   // perintah  WHILE untuk looping code
    $rows[] = $row; // untuk mengisi array $rows yg masih kosong/isi dari kurung sikunya
  }

  return $rows;
}
