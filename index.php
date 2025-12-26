<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daily Journal</title>
    <link rel="icon" href="image/logo.png" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <style>
      #profile-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      #profile-card:hover {
        transform: scale(1.02);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
      }
    </style>
  </head>
  <!-- 
Nama: Affan Shahzada
NIM: A11.2024.15784 

LINK VIDEO

https://drive.google.com/drive/folders/1J_Vht6KGULFJzSX19eFhD0uWMG5nVUIX?usp=sharing



-->

  <body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">My Daily Journal</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#jadwal">Jadwal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
        <div class="d-flex gap-2">
          <button id="theme-dark" class="btn btn-dark btn-outline-light">
            <i class="bi bi-moon"></i>
          </button>
          <button id="theme-light" class="btn btn-light btn-outline-dark">
            <i class="bi bi-brightness-high"></i>
          </button>
        </div>
      </div>
    </nav>

    <!-- INI HERO -->
    <section id="hero" class="text-center p-5 bg-primary-subtle text-sm-start">
      <div class="container">
        <div class="d-sm-flex fle-sm-row-reserve align-items-center gap-5">
          <img src="image/banner.jpg" class="img-fluid" width="300" />
          <div>
            <h1 class="fw-bold display-4">
              Create Memories, Save Memories, Everyday
            </h1>
            <h4 class="lead display-6">
              Mencatat semua kegiatan sehari-hari yang ada tanpa terkecuali
            </h4>
            <h6>
              <span id="tanggal"></span>
              <span id="waktu"></span>
            </h6>
          </div>
        </div>
      </div>
    </section>

    <!--INI ARTICLE -->
    <!-- article begin -->
    <section id="article" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">article</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
          <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); while($row = $hasil->fetch_assoc()){ ?>
          <div class="col">
            <div class="card h-100">
              <img src="image/<?= $row["gambar"]?>" class="card-img-top" alt="..."
              />
              <div class="card-body">
                <h5 class="card-title"><?= $row["judul"]?></h5>
                <p class="card-text">
                  <?= $row["isi"]?>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">
                  <?= $row["tanggal"]?>
                </small>
              </div>
            </div>
          </div>
          <?php
      }
      ?>
        </div>
      </div>
    </section>
    <!-- article end -->

    <!--INI GALLERY -->
    <section id="gallery" class="text-center p-5 bg-primary-subtle">
      <div class="container">
        <h1 class="fw-bold displa-4 pb-3">Gallery</h1>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image/img1.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="image/img2.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="image/img3.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="image/img4.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="image/img5.png" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <!--INI JADWAL -->
    <section id="jadwal" class="text-center p-5 bg-light">
      <div class="container">
        <h1 class="fw-bold display-4 pb-4">Jadwal Kuliah</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
          <div class="col">
            <div class="card h-100 shadow-sm border-primary border-3">
              <div class="card-heder fw-bold fs-4 bg-primary text-white">
                Senin
              </div>
              <div class="card-body">
                <h5 class="card-title">09.30-12.00</h5>
                <p class="card-text">
                  PROBABILITAS DAN STATISTIK<br />
                  Ruang H.5.11
                </p>
                <hr />
                <h5 class="card-title">15.30-18.00</h5>
                <p class="card-text">
                  LOGIKA INFORMATIKA<br />
                  Ruang H.3.9
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow-sm border-success border-3">
              <div class="card-heder fw-bold fs-4 bg-success text-white">
                Selasa
              </div>
              <div class="card-body">
                <h5 class="card-title">10.20-12.00</h5>
                <p class="card-text">
                  BASIS DATA<br />
                  Ruang D.2.k
                </p>
                <hr />
                <h5 class="card-title">12.30-14.10</h5>
                <p class="card-text">
                  PEMROGRAMAN BERBASIS WEB<br />
                  Ruang D.2.J
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow-sm border-danger border-3">
              <div class="card-heder fw-bold fs-4 bg-danger text-white">
                Rabu
              </div>
              <div class="card-body">
                <h5 class="card-title">09.30-12.00</h5>
                <p class="card-text">
                  REKAYASA PERANGKAT LUNAK<br />
                  Ruang H.3.10
                </p>
                <hr />
                <h5 class="card-title">12.30-15.00</h5>
                <p class="card-text">
                  KRIPTOGRAFI<br />
                  Ruang H.5.9
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow-sm border-warning border-3">
              <div class="card-heder fw-bold fs-4 bg-warning text-white">
                Kamis
              </div>
              <div class="card-body">
                <h5 class="card-title">10.20-12.00</h5>
                <p class="card-text">
                  BASIS DATA<br />
                  Ruang H.5.6
                </p>
                <hr />
                <h5 class="card-title">12.30-15.00</h5>
                <p class="card-text">
                  SISTEM OPERASI<br />
                  Ruang H.3.10
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow-sm border-info border-3">
              <div class="card-heder fw-bold fs-4 bg-info text-white">
                Jumat
              </div>
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"></p>
                <hr />
                <h5 class="card-title">15.30-18.00</h5>
                <p class="card-text">
                  PENAMBANGAN DATA<br />
                  Ruang H.4.3
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow-sm border-info-subtle border-3">
              <div class="card-heder fw-bold fs-4 bg-info-subtle text-black">
                Sabtu
              </div>
              <div class="card-body">
                <h5 class="card-title">09.30-12.00</h5>
                <p class="card-text">
                  Kelas BTNG<br />
                  Ruang Diumumkan
                </p>
                <hr />
                <h5 class="card-title"></h5>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow-sm border-dark-subtle border-3">
              <div class="card-heder fw-bold fs-4 bg-dark-subtle text-black">
                Minggu
              </div>
              <div class="card-body">
                <p class="card-text">Tidak Ada Jadwal</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="profile" class="p-5 bg-primary-subtle">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3 text-center">Profile Mahasiswa</h1>
        <div class="row align-items-center justify-content-center">
          <div class="col-md-4 text-center mb-4 mb-md-0">
            <img
              src="image/profile.jpg"
              alt="Foto Profil"
              class="img-fluid rounded-circle shadow profile-img"
              style="width: 300px"
            />
          </div>

          <div class="col-md-8 text-center">
            <div class="card shadow rounded bg-light" id="profile-card">
              <div class="card-body">
                <h2 class="fw-bold">Affan Shahzada</h2>
                <hr class="d-md-none" />
                <table
                  class="table table-borderless bg-light"
                  style="max-width: 500px; margin: auto"
                >
                  <tbody>
                    <tr>
                      <th scope="row" style="width: 150px">NIM</th>
                      <td>:</td>
                      <td>A11.2024.15784</td>
                    </tr>
                    <tr>
                      <th scope="row">Program Studi</th>
                      <td>:</td>
                      <td>Teknik Informatika</td>
                    </tr>
                    <tr>
                      <th scope="row">Email</th>
                      <td>:</td>
                      <td>a11.2024.15784@mhs.dinus.ac.id</td>
                    </tr>
                    <tr>
                      <th scope="row">Telepon</th>
                      <td>:</td>
                      <td>+62 812-3456-7890</td>
                    </tr>
                    <tr>
                      <th scope="row">Alamat</th>
                      <td>:</td>
                      <td>Jl. Imam Bonjol No. 123, Semarang</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="text-center p-5 bg-primary text-white">
      <div>
        <a href="https:/www.instagram.com/udinusofficial">
          <i class="bi bi-instagram h2 p-2 text-white"></i
        ></a>
        <a href="https://twitter.com/udinusofficial">
          <i class="bi bi-twitter h2 p-2 text-white"></i
        ></a>
        <a href="https://wa.me/+62923715829"
          ><i class="bi bi-whatsapp h2 p-2 text-white"></i
        ></a>
      </div>
      <div>Affan Shahzada &copy; 2025</div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
      window.setTimeout("tampilWaktu()", 1000);

      function tampilWaktu() {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;

        setTimeout("tampilWaktu()", 1000);
        document.getElementById("tanggal").innerHTML =
          waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("waktu").innerHTML =
          waktu.getHours() +
          ":" +
          waktu.getMinutes() +
          ":" +
          waktu.getSeconds();
      }
      document.getElementById("theme-dark").onclick = function () {
        document.body.classList.add("bg-dark", "text-light");
        document.body.classList.remove("bg-light", "text-dark");

        document.getElementById("hero").classList.add("bg-primary");
        document.getElementById("hero").classList.remove("bg-primary-subtle");

        document.getElementById("article").classList.add("bg-dark");
        document.getElementById("article").classList.remove("bg-light");

        document.getElementById("gallery").classList.add("bg-primary");
        document
          .getElementById("gallery")
          .classList.remove("bg-primary-subtle");

        document.getElementById("jadwal").classList.add("bg-dark");
        document.getElementById("jadwal").classList.remove("bg-light");

        document.getElementById("profile").classList.add("bg-dark");
        document
          .getElementById("profile")
          .classList.remove("bg-primary-subtle");

        document.getElementById("profile").classList.add("bg-dark");
        document.getElementById("profile").classList.remove("bg-light");

        document.querySelector("#profile table").classList.add("table-dark");
        document
          .querySelector("#profile table")
          .classList.remove("table-light");

        document.querySelectorAll(".card").forEach((card) => {
          card.classList.add("bg-dark", "text-light", "border-secondary");
        });
      };

      document.getElementById("theme-light").onclick = function () {
        document.body.classList.add("bg-light", "text-dark");
        document.body.classList.remove("bg-dark", "text-light");

        document.getElementById("hero").classList.add("bg-primary-subtle");
        document.getElementById("hero").classList.remove("bg-primary");

        document.getElementById("article").classList.add("bg-light");
        document.getElementById("article").classList.remove("bg-dark");

        document.getElementById("gallery").classList.add("bg-primary-subtle");
        document.getElementById("gallery").classList.remove("bg-primary");

        document.getElementById("jadwal").classList.add("bg-light");
        document.getElementById("jadwal").classList.remove("bg-dark");

        document.getElementById("profile").classList.add("bg-primary-subtle");
        document.getElementById("profile").classList.remove("bg-dark");

        document.getElementById("profile").classList.add("bg-light");
        document.getElementById("profile").classList.remove("bg-dark");

        document.querySelector("#profile table").classList.add("table-light");
        document.querySelector("#profile table").classList.remove("table-dark");

        document.querySelectorAll(".card").forEach((card) => {
          card.classList.remove("bg-dark", "text-light", "border-secondary");
        });
      };

      // document.getElementById("theme-dark").onclick = function () {
      //   document.documentElement.setAttribute("data-bs-theme", "dark");
      // };
      // document.getElementById("theme-light").onclick = function () {
      //   document.documentElement.setAttribute("data-bs-theme", "light");
      // };
    </script>
  </body>
</html>
