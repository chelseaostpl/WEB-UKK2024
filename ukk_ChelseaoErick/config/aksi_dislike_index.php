<?php
session_start();
include 'koneksi.php';
$fotoid = $_GET['fotoid'];
$userid = $_SESSION['userid'];

$ceksuka = mysqli_query($koneksi, "SELECT * FROM dislikefoto WHERE fotoid='$fotoid' AND userid='$userid'");

if (mysqli_num_rows($ceksuka) == 1) {
  while($row = mysqli_fetch_array($ceksuka)) {
    $dislikeid = $row['dislikeid'];
    $query = mysqli_query($koneksi, "DELETE FROM dislikefoto WHERE dislikeid='$dislikeid'");
    
    echo "<script>
    location.href ='../login/index.php';
    </script>";
    }
    
  } else {
    $tanggallike = date('y-m-d');
    $query = mysqli_query($koneksi, "INSERT INTO dislikefoto VALUES ('', '$fotoid', '$userid', '$tanggallike')");

    echo "<script>
    location.href ='../login/index.php';
    </script>";
  }

?>