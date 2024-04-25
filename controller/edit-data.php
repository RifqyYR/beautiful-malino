<?php
  include '../utils/config.php';
  include '../utils/query.php';

  $conn = createConnection();
  if (!$conn) {
    die('Koneksi Gagal: ' . mysqli_connect_error());
  }

  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $nomor_telepon = $_POST['nomor_telepon'];
  $waktu_pelaksanaan = $_POST['waktu_pelaksanaan'];
  $jumlah_peserta = $_POST['jumlah_peserta'];
  $jumlah_pembayaran = $_POST['jumlah_pembayaran'];

  $checkbox_penginapan = isset($_POST['checkbox_penginapan']) && $_POST['checkbox_penginapan'] == 'on' ? 1 : 0;
  $checkbox_transportasi = isset($_POST['checkbox_transportasi']) && $_POST['checkbox_transportasi'] == 'on' ? 1 : 0;
  $checkbox_makanan = isset($_POST['checkbox_makanan']) && $_POST['checkbox_makanan'] == 'on' ? 1 : 0;

  $stmt = $conn->prepare($update_query);
  $stmt->bind_param("ssiiiiiii", $nama, $nomor_telepon, $waktu_pelaksanaan, $jumlah_peserta, $jumlah_pembayaran, $checkbox_penginapan, $checkbox_transportasi, $checkbox_makanan, $id);

  if ($stmt->execute()) {
    header("Location: ../pesanan.php?success=true");
    exit;
  } else {
    header("Location: ../error.php");
    exit;
  }

  $stmt->close();
  $conn->close();
?>