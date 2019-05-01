<?php
include '../../database/db.php';

if (isset($_POST['title'])) {
  $judul = $_POST['title'];
  $desc = $_POST['description'];
  $tanggal = $_POST['date'];
  $lokasi = $_POST['location'];
  $kategori = $_POST['kategori'];
  $waktu_awal = $_POST['waktu_awal'];
  $waktu_akhir = $_POST['waktu_akhir'];
  $harga = $_POST['price'];
  $detail = $_POST['detail'];

  $q = "insert into events values('', '$judul', '$desc', 'seminar1.png', '$tanggal', '$lokasi', '$kategori', '$waktu_awal', '$harga', '$waktu_akhir', '$detail')";
  $sql = mysqli_query($c, $q);

  if ($sql) {
    header('location:../tambah_event.php');
  } else {
    echo "gagal menambahkan data.. masih ada yang salah kek nya";
    header("Refresh:5; url=../index.php", true, 303);
  }
} else {
  header("Refresh:5; url=../index.php", true, 303);
}
