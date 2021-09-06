<?php
// koneksi database
include '../config/connect.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
 
// update data ke database
$query_update = mysqli_query($db, "update biodata set nama='$nama', alamat='$alamat', usia='$usia' where id='$id'");
 
// pengecekan jika data berhasil dirubah maka tampilkan message box, selain itu tampilkan error message
if($query_update){
  echo "<script>alert('Berhasil merubah data ke database');</script>";
  echo "<script>location.href='../index.php';</script>";
}else{
  echo "<script>alert('Gagal merubah data');</script>";
  echo mysqli_error();
}
 
?>