<?php
session_start();

if(!isset($_SESSION['username'])){
    header ("Location: ../login.php");
}
if($_SESSION['level']!="guru")
{
    // die("Anda bukan Super Admin");
    header ("Location: ../siswa");
}
?>