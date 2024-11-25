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
            <a class="nav-link text-dark" href="../pages/mobil.php">
              <i class="material-symbols-rounded opacity-7">table_view</i>
              <span class="nav-link-text ms-1">Daftar Mobil</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active bg-gradient-dark text-white" href="../pages/transaksi.php">
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
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Transaksi</li>
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
                    <h6 class="text-white text-capitalize ps-3">Tabel Transaksi</h6>
                  </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="col-md-13 text-end me-3">
                      <a class="btn bg-gradient-dark mb-0"  data-bs-toggle="modal" data-bs-target="#tambahTransaksiModal"><i class="material-symbols-rounded text-sm">add</i>&nbsp;&nbsp;Tambah Data Transaksi</a>
                    </div>
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-center font-weight-bolder text-dark active">ID Transaksi</th>
                          <th class="text-center font-weight-bolder text-dark active">Nama Customer</th>
                          <th class="text-center font-weight-bolder text-dark active">Tanggal Sewa</th>
                          <th class="text-center font-weight-bolder text-dark active">Tanggal Kembali</th>
                          <th class="text-center font-weight-bolder text-dark active">Mobil Disewa</th>
                          <th class="text-center font-weight-bolder text-dark active">Total Harga</th>
                          <th class="text-center font-weight-bolder text-dark active">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include 'koneksi.php';
                        // Query untuk mengambil data dari tabel mobil
                        $query = "SELECT * FROM transaksi";
                        $result = mysqli_query($koneksi, $query);

                        // Looping data dari hasil query
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                          <tr>
                            <td class="text-center text-sm"><?php echo $row['id_transaksi']; ?></td>
                            <td class="text-center text-sm"><?php echo $row['nama_cust']; ?></td>
                            <td class="text-center text-sm"><?php echo $row['tgl_sewa']; ?></td>
                            <td class="text-center text-sm"><?php echo $row['tgl_kembali']; ?></td>
                            <td class="text-center text-sm"><?php echo $row['mobil_disewa']; ?></td>
                            <td class="text-center text-sm">Rp. <?php echo $row['total_harga']; ?></td>
                            <td class="text-center text-sm">
                              <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:void(0);" onclick="confirmDeletion('<?php echo $row['id_transaksi']; ?>')"><i class="material-symbols-rounded text-sm me-2">delete</i>Hapus</a>
                              <a class="btn btn-link text-dark px-3 mb-0 edit-btn" 
                                href="javascript:void(0);" 
                                data-id="<?php echo $row['id_transaksi']; ?>" 
                                data-nama="<?php echo $row['nama_cust']; ?>" 
                                data-sewa="<?php echo $row['tgl_sewa']; ?>" 
                                data-kembali="<?php echo $row['tgl_kembali']; ?>" 
                                data-mobil="<?php echo $row['mobil_disewa']; ?>"
                                data-total="<?php echo $row['total_harga']; ?>">
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

    <!-- Modal Edit Mobil -->
    <div class="modal fade" id="editTransaksiModal" tabindex="-1" aria-labelledby="editTransaksiLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="updatetransaksi.php">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editMobilLabel">Edit Data Transaksi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" style="color: black;">ID Transaksi</label>
                            <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" readonly>
                        </div>  
                        <div class="mb-3">
                            <label class="form-label" style="color: black;">Nama Customer</label>
                            <input type="text" class="form-control" id="nama_cust" name="nama_cust" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="color: black;">Tanggal Sewa</label>
                            <input type="date" class="form-control" id="tgl_sewa" name="tgl_sewa" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="color: black;">Tanggal Kembali</label>
                            <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="color: black;">Mobil Disewa</label>
                            <input type="text" class="form-control" id="mobil_disewa" name="mobil_disewa" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="color: black;">Total Harga</label>
                            <input type="text" class="form-control" id="total_harga" name="total_harga" required>
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

    <div class="modal fade" id="tambahTransaksiModal" tabindex="-1" aria-labelledby="tambahTransaksiLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <form method="POST" action="tambahtransaksi.php">
                  <div class="modal-header">
                      <h5 class="modal-title" id="tambahTransaksiLabel">Tambah Data Transaksi</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="mb-3">
                          <label class="form-label" style="color: black;">ID Transaksi</label>
                          <input type="text" class="form-control" id="id_transaksi_tambah" name="id_transaksi" required>
                      </div>
                      <div class="mb-3">
                          <label class="form-label" style="color: black;">Nama Customer</label>
                          <input type="text" class="form-control" id="nama_cust_tambah" name="nama_cust" required>
                      </div>
                      <div class="mb-3">
                          <label class="form-label" style="color: black;">Tanggal Sewa</label>
                          <input type="date" class="form-control" id="tgl_sewa_tambah" name="tgl_sewa" required>
                      </div>
                      <div class="mb-3">
                          <label class="form-label" style="color: black;">Tanggal Kembali</label>
                          <input type="date" class="form-control" id="tgl_kembali_tambah" name="tgl_kembali" required>
                      </div>
                      <div class="mb-3">
                          <label class="form-label" style="color: black;">Mobil Disewa</label>
                          <input type="text" class="form-control" id="mobil_disewa_tambah" name="mobil_disewa" required>
                      </div>
                      <div class="mb-3">
                          <label class="form-label" style="color: black;">Total Harga</label>
                          <input type="number" class="form-control" id="total_harga_tambah" name="total_harga" required>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-primary">Tambah Transaksi</button>
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
                const id = this.getAttribute('data-id');
                const nama = this.getAttribute('data-nama');
                const sewa = this.getAttribute('data-sewa');
                const kembali = this.getAttribute('data-kembali');
                const mobil = this.getAttribute('data-mobil');
                const total = this.getAttribute('data-total');

                document.getElementById('id_transaksi').value = id;
                document.getElementById('nama_cust').value = nama;
                document.getElementById('tgl_sewa').value = sewa;
                document.getElementById('tgl_kembali').value = kembali;
                document.getElementById('mobil_disewa').value = mobil;
                document.getElementById('total_harga').value = total;

                // Menampilkan modal
                new bootstrap.Modal(document.getElementById('editTransaksiModal')).show();
            });
        });
    </script>

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
      let deleteidtransaksi = null; // Menyimpan plat mobil yang akan dihapus

      function confirmDeletion(id_transaksi) {
          deleteidtransaksi = id_transaksi; // Set plat mobil yang akan dihapus
          const myModal = new bootstrap.Modal(document.getElementById('confirmDeleteModal')); // Inisiasi modal
          myModal.show(); // Tampilkan modal
      }

      // Proses penghapusan saat tombol "Ya, Hapus" diklik
      document.getElementById('confirmDeleteButton').addEventListener('click', function () {
          if (deleteidtransaksi) {
              window.location.href = "hapustransaksi.php?id_transaksi=" + encodeURIComponent(deleteidtransaksi);
          }
      });
    </script>


  </body>

  </html>