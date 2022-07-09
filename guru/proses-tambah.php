<?php
include ("../config/koneksi.php");

$query = "INSERT INTO nilai (nama, agama, bahasa, kognitif, sosial, seni, motorik)
          VALUES('$_POST[nama]','$_POST[agama]', '$_POST[bahasa]','$_POST[kognitif]', '$_POST[sosial]', '$_POST[seni]', '$_POST[motorik]')";
          
mysqli_query($con, $query);

if( $query ) {
  // kalau berhasil alihkan ke halaman list-siswa.php
  header('Location: nilai.php');
  } else {
  // kalau gagal tampilkan pesan
  die("Gagal menyimpan perubahan...");
  }


?>