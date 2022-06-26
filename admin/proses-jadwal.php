<?php
include ("../config/koneksi.php");

$query = "INSERT INTO jadwal (hari, mapel, kelas, waktu, guru)
          VALUES('$_POST[hari]', '$_POST[mapel]','$_POST[kelas]', '$_POST[waktu]', '$_POST[guru]')";
          
mysqli_query($con, $query);

if( $query ) {
  // kalau berhasil alihkan ke halaman list-siswa.php
  header('Location: jadwal.php');
  } else {
  // kalau gagal tampilkan pesan
  die("Gagal menyimpan perubahan...");
  }


?>