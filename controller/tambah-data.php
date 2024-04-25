<?php
  include '../utils/config.php';
  include '../utils/query.php';

  $conn = createConnection();
  if (!$conn) {
    die('Koneksi Gagal: ' . mysqli_connect_error());
  }

  $nama = $_POST['nama'];
  $nomor_telepon = $_POST['nomor_telepon'];
  $waktu_perjalanan = $_POST['waktu_perjalanan'];
  $jumlah_peserta = $_POST['jumlah_peserta'];
  $jumlah_tagihan = $_POST['jumlah_tagihan'];

  $layanan_penginapan = isset($_POST['layanan_penginapan']) && $_POST['layanan_penginapan'] == 'on' ? 1 : 0;
  $layanan_transportasi = isset($_POST['layanan_transportasi']) && $_POST['layanan_transportasi'] == 'on' ? 1 : 0;
  $layanan_makanan = isset($_POST['layanan_makanan']) && $_POST['layanan_makanan'] == 'on' ? 1 : 0;

  $stmt = $conn->prepare($create_query);
  $stmt->bind_param("ssiiiiii", $nama, $nomor_telepon, $waktu_perjalanan, $jumlah_peserta, $jumlah_tagihan, $layanan_penginapan, $layanan_transportasi, $layanan_makanan);

  if ($stmt->execute()) {
    header("Location: ../index.php?success=true");
    exit;
  } else {
    header("Location: ../error.php");
    exit;
  }

  $stmt->close();
  $conn->close();
?>