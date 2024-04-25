<?php 
  include '../utils/config.php';
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  if (!$conn) {
    die('Koneksi Gagal: ' . mysqli_connect_error());
  }
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM reservasi WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
      header("Location: ../pesanan.php");
      exit;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
?>