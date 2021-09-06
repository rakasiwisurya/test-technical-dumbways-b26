<?php 
// koneksi database
include '../config/connect.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
$query_delete = mysqli_query($db, "delete from biodata where id='$id'");
 
// pengecekan jika data berhasil dihapus maka tampilkan message box, selain itu tampilkan error message
if($query_delete){
  echo "<script>alert('Berhasil menghapus data dari database');</script>";
  echo "<script>location.href='../index.php';</script>";
}else{
  echo "<script>alert('Gagal menghapus data');</script>";
  echo mysqli_error();
}
 
?>