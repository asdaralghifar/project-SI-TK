<?php
if(isset($_GET['id']))
{
    include('../config/koneksi.php');
    $id = $_GET['id'];
    $query = mysqli_query($con,"select * from guru where id='$id'");
    $data_file = $query->fetch_array();
 
    $query_hapus = mysqli_query($con,"delete from guru where id='$id'");
    unlink('../img/'.$data_file['foto']);
    header('location:dguru.php');
}
else
{
    header('location:index.php');
}
?>