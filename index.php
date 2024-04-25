<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beautiful Malino</title>

  <link rel="stylesheet" href="css/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <?php
    if (isset($_GET['success'])) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="z-index: 22;">
        Data berhasil ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
  ?>
  <nav class="navbar navbar-expand bg-primary navbar-dark sticky-top">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#paketWisata">Paket Wisata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#video">Video</a>
          </li>
        </ul>
        <ul class="navbar-nav mv-2 mb-lg-0">
          <li class="nav-item ms-auto">
            <a class="nav-link" href="pesanan.php">Pesanan Saya</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/hero.jpg" class="d-block w-100 img-hero" alt="...">
      </div>
      <div class="carousel-item">
        <div class="overlay"></div>
        <img src="images/card-image-1.jpg" class="d-block w-100 img-hero" alt="...">
      </div>
      <div class="carousel-item">
        <div class="overlay"></div>
        <img src="images/card-image-2.jpg" class="d-block w-100 img-hero" alt="...">
      </div>
    </div>
    <div class="overlay">
      <h1 class="text-white">Beautiful Malino</h1>
      <p class="fs-4">Happiness Start From Here</p>
      <a href="" class="btn btn-lg btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#formPesanTiketWisata">
        Reservasi Sekarang
      </a>
    </div>
  </div>

  <!-- <div class="img-hero">
    <div class="overlay">
      <h1 class="text-white">Beautiful Malino</h1>
      <p class="fs-4">Happiness Start From Here</p>
      <a href="" class="btn btn-lg btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#formPesanTiketWisata">
        Reservasi Sekarang
      </a>
    </div>
  </div> -->

  <div class="container my-4">
    <section id="about" class="mb-4">
      <h2 class="h2">About</h2>
      <p class="lh-md text-about">
        Malino adalah kelurahan yang terletak di Kecamatan Tinggimoncong, Kabupaten Gowa, Sulawesi Selatan.
        Daerah yang
        terletak 64 km dari Kota Makassar ke arah timur laut ini merupakan salah satu objek wisata alam yang
        mempunyai
        daya tarik luar biasa, baik bagi masyarakat Sulawesi Selatan maupun pengunjung dari luar provinsi.
        <br>
        <br>
        Di kawasan wisata Malino sendiri, terdapat hutan wisata, berupa pohon pinus yang tinggi berjejer di
        antara bukit
        dan lembah. Jalan menanjak dan berkelok-kelok dengan melintasi deretan pegunungan dan lembah yang indah
        bak
        lukisan alam, akan mengantarkan Anda ke kota Malino. Kawasan tersebut terkenal sebagai kawasan rekreasi
        dan
        wisata sejak zaman penjajahan Belanda.
        <br>
        <br>
        Malino memiliki gunung-gunung yang sangat kaya dengan pemandangan batu gamping dan pinus. Berbagai jenis
        tanaman
        tropis yang indah,tumbuh dan berkembang di kota yang dingin ini. Selain itu, Malino pun menghasilkan
        buah-buahan
        dan sayuran khas yang tumbuh di lereng gunung Bawakaraeng dan gunung lompobattang. Sebagian masyarakat
        Sulawesi
        Selatan masih mengkulturkan gunung itu sebagai tempat suci dan keramat. Suhu di kota Malino ini mulai
        dari 10 °C
        sampai 26 °C. dan ketika musim hujan, berhati hati sedang berkendara karena, kota ini sering berkabut
        dan jarak
        pandangnya 100meter saja, selain itu sering terjadi tanah longsor.
        <br>
        <br>
        Perjalanan dari kota Makassar menuju daerah ini memakan waktu sekitar 1.5 jam. Wisata air terjun seribu
        tangga,
        air terjun Takapala, Kebun Teh malino high land, Lembah Biru, bungker peninggalan Jepang, dan Gunung
        Bawakaraeng
        menjadi ciri khas kota Malino. Oleh-oleh khas daerah ini adalah buah Markisa,dodol ketan, Tenteng
        Malino, terong
        belanda, wajik, dll. sayuran daun bawang, sawi putih, kol, kembang kol, sayur paling khas sayur pakis,
        dll.
        Malino juga menjadi daerah penghasil beras bagi wilayah Sulawesi Selatan.
      </p>
    </section>
    <section id="paketWisata" class="mb-4">
      <h2 class="h2">Paket Wisata</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="images/card-image-1.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <span class="card-date">11 September 2024</span>
              <h5 class="card-title mt-1">Malino Pine Forest</h5>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita
                dignissimos
                officiis neque? Commodi molestiae magni voluptatem recusandae unde impedit voluptatibus.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="images/card-image-2.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <span class="card-date">11 September 2024</span>
              <h5 class="card-title mt-1">The River Taman Rekreasi Malino</h5>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita
                dignissimos
                officiis neque? Commodi molestiae magni voluptatem recusandae unde impedit voluptatibus.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="images/card-image-3.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <span class="card-date">11 September 2024</span>
              <h5 class="card-title mt-1">Lembah Hijau Camp & Resort</h5>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita
                dignissimos
                officiis neque? Commodi molestiae magni voluptatem recusandae unde impedit voluptatibus.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-4">
          <div class="card">
            <img src="images/card-image-4.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <span class="card-date">11 September 2024</span>
              <h5 class="card-title mt-1">Takapala Waterfall</h5>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita
                dignissimos
                officiis neque? Commodi molestiae magni voluptatem recusandae unde impedit voluptatibus.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="images/card-image-5.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <span class="card-date">11 September 2024</span>
              <h5 class="card-title mt-1">Salewangang Waterfall</h5>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita
                dignissimos
                officiis neque? Commodi molestiae magni voluptatem recusandae unde impedit voluptatibus.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="images/card-image-6.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <span class="card-date">11 September 2024</span>
              <h5 class="card-title mt-1">Batulapisi Dalam</h5>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita
                dignissimos
                officiis neque? Commodi molestiae magni voluptatem recusandae unde impedit voluptatibus.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="video">
      <h2 class="h2">Video</h2>
      <div class="d-flex justify-content-center ratio ratio-16x9">
        <iframe src="https://www.youtube.com/embed/1_fOe7_-5f8?si=-moMWd6idduQ8w71" title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    </section>
  </div>

  <div class="modal fade" id="formPesanTiketWisata" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pemesanan Tiket Wisata</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="controller/tambah-data.php" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-5">
                <label for="nama">Nama Pemesan</label>
              </div>
              <div class="col-md-7">
                <input type="text" class="form-control" name="nama" required>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="nomor_telepon">Nomor Telepon / HP</label>
              </div>
              <div class="col-md-7">
                <input type="text" class="form-control" name="nomor_telepon" required>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="waktu_perjalanan">Waktu Pelaksanaan Perjalanan</label>
              </div>
              <div class="col-md-7">
                <div class="input-group mb-3">
                  <input id="inputWaktuPerjalanan" type="number" class="form-control" name="waktu_perjalanan" min="1"
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
                  <input id="inputJumlahPeserta" type="number" class="form-control" name="jumlah_peserta" min="1"
                    required>
                  <span class="input-group-text">Orang</span>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="layanan">Pelayanan Paket Perjalanan</label>
              </div>
              <div class="col-md-7">
                <div class="form-check-inline">
                  <input class="form-check-input checkbox" type="checkbox" id="checkboxPenginapan"
                    name="layanan_penginapan">
                  <label class="form-check-label" for="layanan_penginapan">
                    Penginapan
                  </label>
                </div>
                <div class="form-check-inline">
                  <input class="form-check-input checkbox" type="checkbox" id="checkboxTransportasi"
                    name="layanan_transportasi">
                  <label class="form-check-label" for="layanan_transportasi">
                    Transportasi
                  </label>
                </div>
                <div class="form-check-inline">
                  <input class="form-check-input checkbox" type="checkbox" id="checkboxMakanan" name="layanan_makanan">
                  <label class="form-check-label" for="layanan_makanan">
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
                  <input type="number" class="form-control" id="harga_paket" name="harga_paket" required readonly>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="jumlah_tagihan">Jumlah Tagihan</label>
              </div>
              <div class="col-md-7">
                <div class="input-group mb-3">
                  <span class="input-group-text">Rp</span>
                  <input id="jumlah_tagihan" type="number" class="form-control" name="jumlah_tagihan" required readonly>
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

  <script src="js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>