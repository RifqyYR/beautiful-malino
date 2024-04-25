<?php 
  include '../utils/config.php';
include '../utils/query.php';

  $conn = createConnection();
  if (!$conn) {
    die('Koneksi Gagal: ' . mysqli_connect_error());
  }
  
  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
      header("Location: ../pesanan.php");
      exit;
    } else {
      header("Location: ../error.php");
      exit;
    }
  }

  $stmt->close();
  $conn->close();
?>