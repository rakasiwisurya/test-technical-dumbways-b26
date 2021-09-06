<?php
// koneksi database
include "../config/connect.php";

// menangkap data yang di kirim dari form
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$usia=$_POST['usia'];

// create data ke database
$query_create=mysqli_query($db, "insert into biodata (id, nama, alamat, usia) value('', '$nama','$alamat','$usia')");

// pengecekan jika data berhasil ditambahkan maka tampilkan message box, selain itu tampilkan error message
if($query_create){
  echo "<script>alert('Berhasil menambah data ke database');</script>";
  echo "<script>location.href='../index.php';</script>";
}else{
  echo "<script>alert('Gagal input data');</script>";
  echo mysqli_error();
}
?>