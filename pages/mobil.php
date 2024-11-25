<?php session_start(); ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/mobil.png">
    <link rel="icon" type="image/png" href="../assets/img/mobil.png">
    <title>
      Rental Mobil
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
    <style>
      .form-control {
          border: 1px solid #000;
          border-radius: 4px;
          padding-left: 10px; 
          padding-right: 10px; 
          box-sizing: border-box;
      }

      .modal .form-control {
          border: 1px solid #000 !important;
          box-shadow: none;
          padding-left: 10px; 
          padding-right: 10px; 
          box-sizing: border-box;
      }
    </style>
  </head>

  <body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2" id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-4 py-3 m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
          <img src="../assets/img/mobil.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
          <span class="ms-1 text-sm text-dark">Rental Mobil</span>
        </a>
      </div>
      <hr class="horizontal dark mt-0 mb-2">
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-dark" href="../pages/dashboard.php">
              <i class="material-symbols-rounded opacity-7">dashboard</i>
              <span class="nav-link-text ms-1">Beranda</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active bg-gradient-dark text-white" href="../pages/mobil.php">
              <i class="material-symbols-rounded opacity-7">table_view</i>
              <span class="nav-link-text ms-1">Daftar Mobil</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="../pages/transaksi.php">
              <i class="material-symbols-rounded opacity-7">receipt_long</i>
              <span class="nav-link-text ms-1">Transaksi  </span>
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/penyewa.php">
            <i class="material-symbols-rounded opacity-7">face</i>
            <span class="nav-link-text ms-1">Penyewa</span>
          </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="../pages/user.php">
              <i class="material-symbols-rounded opacity-7">person</i>
              <span class="nav-link-text ms-1">User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="../pages/sign-in.php">
              <i class="material-symbols-rounded opacity-7">login</i>
              <span class="nav-link-text ms-1">Keluar</span>
            </a>
          </li>
        </ul>
      </div>  
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Halaman</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Daftar Mobil</li>
                </ol>
            </nav>
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li class="nav-item px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body font-weight-bold px-0 d-flex align-items-center">
                        <i class="material-symbols-rounded fixed-plugin-button-nav">settings</i>
                    </a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0 d-flex align-items-center">
                        <i class="material-symbols-rounded">account_circle</i>
                        <?php
                            if (isset($_SESSION['nama_user'])) {
                                echo '<span class="ms-2">' . htmlspecialchars($_SESSION['nama_user']) . '</span>';
                            }
                        ?>
                    </a>
                </li>
            </ul>
        </div>
      </nav>

      <!-- End Navbar -->
      <div class="container-fluid py-2">
        <div class="container-fluid py-2">
          <div class="row">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Tabel Mobil</h6>
                  </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="col-md-13 text-end me-3">
                      <a class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#tambahMobilModal"><i class="material-symbols-rounded text-sm">add</i>&nbsp;&nbsp;Tambah Data Mobil</a>
                    </div>
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-center font-weight-bolder text-dark active">Plat Mobil</th>
                          <th class="text-center font-weight-bolder text-dark active">Merk</th>
                          <th class="text-center font-weight-bolder text-dark active">Nama Mobil</th>
                          <th class="text-center font-weight-bolder text-dark active">Warna</th>
                          <th class="text-center font-weight-bolder text-dark active">Harga Sewa</th>
                          <th class="text-center font-weight-bolder text-dark active">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include 'koneksi.php';
                        // Query untuk mengambil data dari tabel mobil
                        $query = "SELECT * FROM mobil";
                        $result = mysqli_query($koneksi, $query);

                        // Looping data dari hasil query
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                          <tr>
                            <td class="text-center text-sm"><?php echo $row['plat_mobil']; ?></td>
                            <td class="text-center text-sm"><?php echo $row['merk']; ?></td>
                            <td class="text-center text-sm"><?php echo $row['nama_mobil']; ?></td>
                            <td class="text-center text-sm"><?php echo $row['warna']; ?></td>
                            <td class="text-center text-sm">Rp. <?php echo $row['harga_sewa']; ?></td>
                            <td class="text-center text-sm">
                              <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:void(0);" onclick="confirmDeletion('<?php echo $row['plat_mobil']; ?>')"><i class="material-symbols-rounded text-sm me-2">delete</i>Hapus</a>
                              <a class="btn btn-link text-dark px-3 mb-0 edit-btn" 
                                href="javascript:void(0);" 
                                data-plat="<?php echo $row['plat_mobil']; ?>" 
                                data-merk="<?php echo $row['merk']; ?>" 
                                data-nama="<?php echo $row['nama_mobil']; ?>" 
                                data-warna="<?php echo $row['warna']; ?>" 
                                data-harga="<?php echo $row['harga_sewa']; ?>">
                                <i class="material-symbols-rounded text-sm me-2">edit</i>Edit
                              </a>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Hapus</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Apakah Anda yakin ingin menghapus data ini?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
            <button type="button" class="btn btn-danger" id="confirmDeleteButton">Ya, Hapus</button>
          </div>
        </div>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script>
      let deletePlatMobil = null; // Menyimpan plat mobil yang akan dihapus

      function confirmDeletion(plat_mobil) {
          deletePlatMobil = plat_mobil; // Set plat mobil yang akan dihapus
          const myModal = new bootstrap.Modal(document.getElementById('confirmDeleteModal')); // Inisiasi modal
          myModal.show(); // Tampilkan modal
      }

      // Proses penghapusan saat tombol "Ya, Hapus" diklik
      document.getElementById('confirmDeleteButton').addEventListener('click', function () {
          if (deletePlatMobil) {
              window.location.href = "hapusmobil.php?plat_mobil=" + encodeURIComponent(deletePlatMobil);
          }
      });
    </script>

    <!-- Modal Edit Mobil -->
    <div class="modal fade" id="editMobilModal" tabindex="-1" aria-labelledby="editMobilLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="updatemobil.php">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editMobilLabel">Edit Data Mobil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" style="color: black;">Plat Mobil</label>
                            <input type="text" class="form-control" id="plat_mobil" name="plat_mobil" readonly>
                        </div>  
                        <div class="mb-3">
                            <label class="form-label" style="color: black;">Merk</label>
                            <input type="text" class="form-control" id="merk" name="merk" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="color: black;">Nama Mobil</label>
                            <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="color: black;">Warna</label>
                            <input type="text" class="form-control" id="warna" name="warna" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="color: black;">Harga Sewa</label>
                            <input type="text" class="form-control" id="harga_sewa" name="harga_sewa" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tambahMobilModal" tabindex="-1" aria-labelledby="tambahMobilLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <form method="POST" action="tambahmobil.php">
                  <div class="modal-header">
                      <h5 class="modal-title" id="tambahMobilLabel">Tambah Data Mobil</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="mb-3">
                          <label class="form-label" style="color: black;">Plat Mobil</label>
                          <input type="text" class="form-control" id="plat_mobil_tambah" name="plat_mobil" required>
                      </div>
                      <div class="mb-3">
                          <label class="form-label" style="color: black;">Merk</label>
                          <input type="text" class="form-control" id="merk_tambah" name="merk" required>
                      </div>
                      <div class="mb-3">
                          <label class="form-label" style="color: black;">Nama Mobil</label>
                          <input type="text" class="form-control" id="nama_mobil_tambah" name="nama_mobil" required>
                      </div>
                      <div class="mb-3">
                          <label class="form-label" style="color: black;">Warna</label>
                          <input type="text" class="form-control" id="warna_tambah" name="warna" required>
                      </div>
                      <div class="mb-3">
                          <label class="form-label" style="color: black;">Harga Sewa</label>
                          <input type="number" class="form-control" id="harga_sewa_tambah" name="harga_sewa" required>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-primary">Tambah Mobil</button>
                  </div>
              </form>
          </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript untuk mengisi data ke dalam modal saat tombol edit diklik
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', function () {
                const plat = this.getAttribute('data-plat');
                const merk = this.getAttribute('data-merk');
                const nama = this.getAttribute('data-nama');
                const warna = this.getAttribute('data-warna');
                const harga = this.getAttribute('data-harga');

                document.getElementById('plat_mobil').value = plat;
                document.getElementById('merk').value = merk;
                document.getElementById('nama_mobil').value = nama;
                document.getElementById('warna').value = warna;
                document.getElementById('harga_sewa').value = harga;

                // Menampilkan modal
                new bootstrap.Modal(document.getElementById('editMobilModal')).show();
            });
        });
    </script>
  </body>

  </html>