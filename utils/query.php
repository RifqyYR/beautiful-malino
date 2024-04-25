<?php
  $delete_query = "DELETE FROM reservasi WHERE id = ?";
  $create_query = "INSERT INTO reservasi (nama, nomor_telepon, waktu_pelaksanaan, jumlah_peserta, jumlah_pembayaran, layanan_penginapan, layanan_transportasi, layanan_makanan) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
  $update_query = "UPDATE reservasi SET nama = ?, nomor_telepon = ?, waktu_pelaksanaan = ?, jumlah_peserta = ?, jumlah_pembayaran = ?, layanan_penginapan = ?, layanan_transportasi = ?, layanan_makanan = ? WHERE id = ?";
  $read_all_query = "SELECT * FROM reservasi";
  $read_one_query = "SELECT * FROM reservasi WHERE id = ?";
?>