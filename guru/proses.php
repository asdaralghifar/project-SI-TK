<?php

  include ("../config/koneksi.php");

  $rand = rand();
  $ekstensi =  array('jpg','jpeg');
  $filename = $_FILES['foto']['name'];
  $ukuran = $_FILES['foto']['size'];
  $ext = pathinfo($filename, PATHINFO_EXTENSION);

  if(!in_array($ext,$ekstensi) ) {
    header("location:profil.php?alert=gagal_ekstensi");
   }else{
    if($ukuran < 6048000){ 
    move_uploaded_file($_FILES['foto']['tmp_name'], '../img/'.$filename);
    mysqli_query($con, "INSERT INTO guru VALUES (NULL,'$_POST[nama]', '$_POST[kelamin]','$_POST[tempat_lahir]', 
    '$_POST[tanggal_lahir]', '$_POST[alamat]','$_POST[phone]', '$filename')");
    header("location:profil.php?alert=berhasil");
    }else{
    header("location:profil.php?alert=gagal_ukuran");
    }
   }
?>