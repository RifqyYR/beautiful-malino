<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beautiful Malino</title>
  <link rel="stylesheet" href="css/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <nav class="navbar navbar-expand bg-primary navbar-dark sticky-top">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Paket Wisata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Video</a>
          </li>
        </ul>
        <ul class="navbar-nav mv-2 mb-lg-0">
          <li class="nav-item ms-auto">
            <a class="nav-link active" href="pesanan.php">Pesanan Saya</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-4">
    <?php
      if (isset($_GET['success'])) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="z-index: 22;">
          Data berhasil diubah
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }
    ?>
    <?php
      include 'utils/config.php';
      $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
      if (!$conn) {
        die('Koneksi Gagal: ' . mysqli_connect_error());
      }
      $sql = "SELECT * FROM reservasi";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        foreach ($result as $item) {
          $services = [];
          
          if ($item['layanan_penginapan'] == 1) {
            $services[] = 'Penginapan';
          }
          if ($item['layanan_transportasi'] == 1) {
            $services[] = 'Transportasi';
          }
          if ($item['layanan_makanan'] == 1) {
            $services[] = 'Makanan';
          }

          echo '<div class="card">
            <div class="card-header">
              <div class="card-title">
                <h3 class="fs-5">Rangkuman Reservasi Paket Anda</h3>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-3">
                  Nama
                </div>
                <div class="col-9">
                  : ' . $item['nama'] . ' 
                </div>
              </div>
              <div class="row">
                <div class="col-3">
                  Nomor Telepon / HP
                </div>
                <div class="col-9">
                  : ' . $item['nomor_telepon'] . '
                </div>
              </div>
              <div class="row">
                <div class="col-3">
                  Jumlah Peserta
                </div>
                <div class="col-9">
                  : ' . $item['jumlah_peserta'] . '
                </div>
              </div>
              <div class="row">
                <div class="col-3">
                  Waktu Perjalanan
                </div>
                <div class="col-9">
                  : ' . $item['waktu_pelaksanaan'] . ' hari
                </div>
              </div>
              <div class="row">
                <div class="col-3">
                  Layanan Paket
                </div>
                <div class="col-9">
                  : ' . implode(', ', $services) . '
                </div>
              </div>
              <div class="row">
                <div class="col-3">
                  Harga Paket
                </div>
                <div class="col-9">
                  : Rp 200.000,00
                </div>
              </div>
              <div class="row">
                <div class="col-3">
                  Jumlah Tagihan
                </div>
                <div class="col-9">
                  : Rp ' . number_format($item['jumlah_pembayaran'],2,',','.') . '
                </div>
              </div>
            </div>
            <div class="card-footer d-flex gap-2 justify-content-center">
              <a onclick="editData('. $item['id'] .')" class="btn btn-info text-white edit-btn" data-bs-toggle="modal" data-bs-target="#formPesanTiketWisata">
                Edit
              </a>
              <a href="" onclick="hapusData('. $item['id'] .')" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#formReservasiBatal">
                Batal
              </a>
            </div>
          </div>';
          echo '<br>';
        }
      } else {
        echo "Belum ada pemesanan";
      }

      $conn->close();
    ?>
  </div>

  <div class="modal fade" id="formPesanTiketWisata" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pemesanan Tiket Wisata</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="controller/edit-data.php" method="post">
          <input type="hidden" name="id" id="id">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-5">
                <label for="nama">Nama Pemesan</label>
              </div>
              <div class="col-md-7">
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="nomor_telepon">Nomor Telepon / HP</label>
              </div>
              <div class="col-md-7">
                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="waktu_pelaksanaan">Waktu Pelaksanaan Perjalanan</label>
              </div>
              <div class="col-md-7">
                <div class="input-group mb-3">
                  <input id="waktu_pelaksanaan" type="number" class="form-control" name="waktu_pelaksanaan" min="1"
                    required>
                  <span class="input-group-text">Hari</span>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="jumlah_peserta">Jumlah Peserta</label>
              </div>
              <div class="col-md-7">
              <div class="input-group mb-3">
                  <input id="jumlah_peserta" type="number" class="form-control" name="jumlah_peserta" min="1"
                    required>
                  <span class="input-group-text">Orang</span>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="name">Pelayanan Paket Perjalanan</label>
              </div>
              <div class="col-md-7">
                <div class="form-check-inline">
                  <input class="form-check-input checkbox" type="checkbox" id="checkbox_penginapan"
                    name="checkbox_penginapan">
                  <label class="form-check-label" for="checkbox_penginapan">
                    Penginapan
                  </label>
                </div>
                <div class="form-check-inline">
                  <input class="form-check-input checkbox" type="checkbox" id="checkbox_transportasi"
                    name="checkbox_transportasi">
                  <label class="form-check-label" for="checkbox_transportasi">
                    Transportasi
                  </label>
                </div>
                <div class="form-check-inline">
                  <input class="form-check-input checkbox" type="checkbox" id="checkbox_makanan"
                    name="checkbox_makanan">
                  <label class="form-check-label" for="checkbox_makanan">
                    Makanan
                  </label>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="harga_paket">Harga Paket Perjalanan</label>
              </div>
              <div class="col-md-7">
              <div class="input-group mb-3">
                  <span class="input-group-text">Rp</span>
                  <input type="number" class="form-control" value="200000" id="harga_paket" name="harga_paket" required readonly>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="jumlah_pembayaran">Jumlah Tagihan</label>
              </div>
              <div class="col-md-7">
              <div class="input-group mb-3">
                  <span class="input-group-text">Rp</span>
                  <input id="jumlah_pembayaran" type="number" class="form-control" name="jumlah_pembayaran" required readonly>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary me-auto" id="btn_cek">Cek Pesanan</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="formReservasiBatal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Batal Reservasi</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah Anda yakin ingin membatalkan reservasi?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
          <a id="linkHapusData" href="" class="btn btn-danger">Ya, batalkan</a>
        </div>
      </div>
    </div>
  </div>

  <script src="js/pesanan.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>