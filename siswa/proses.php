<?php

  include ("../config/koneksi.php");

  $query = "INSERT INTO siswa (nama, kelamin, tempat_lahir, tanggal_lahir, alamat, phone)
            VALUES ('$_POST[nama]', '$_POST[kelamin]','$_POST[tempat_lahir]', 
            '$_POST[tanggal_lahir]', '$_POST[alamat]','$_POST[phone]' )";
            
  mysqli_query($con, $query);

  if( $query ) {
    // kalau berhasil alihkan ke halaman list-siswa.php
    header('Location: profil.php ');
    } else {
    // kalau gagal tampilkan pesan
    die("Gagal menyimpan perubahan...");
    }

// else{
//   echo "File gagal di upload";
// }
?>