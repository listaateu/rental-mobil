  <main id="content" class="content py-10">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
                      <div class="">
                          <h1 class="fs-3 mb-1">Add Kendaraan</h1>
                          <p class="mb-0">Manage your inventory items</p>
                      </div>
                      <div>
                          <a href="index.php?page=kendaraan" class="btn btn-primary">Go to Inventory List</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body p-4">
                          <?php

                            require_once 'function/kendaraan.php';
                            if (isset($_POST['kendaraan'])) {
                                $kendaraan = new kendaraan();

                                $var_id_kategori = $_POST['kendaraan'];
                                $var_nama_kendaraan = $_POST['nama_kendaraan'];
                                $var_harga_sewa = $_POST['harga_sewa'];
                                $var_status = $_POST['status'];

                                $result = $kendaraan->tambah(
                                    $var_id_kategori,
                                    $var_nama_kendaraan,
                                    $var_harga_sewa,
                                    $var_status

                                );

                                if ($result) {
                                    echo "<script>window.location.href='index.php?page=kendaraan'</script>";
                                } else {
                                    echo "Data kendaraan gagal ditambahkan.";
                                }
                            }
                            ?>
                          <form method="post" action="" id="addProductForm">
                              <input type="hidden" class="form-control" name="id" id="id" placeholder="Enter product name" required>
                              <div class="col-md-12 mb-3">
                                  <label for="kategori" class="form-label">Nama Kategori</label>
                                  <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Enter product name" required>
                              </div>
                              <div class="col-md-12 mb-3">
                                  <label for="nama_kendaraan" class="form-label">Nama Kendaraan</label>
                                  <input type="text" class="form-control" name="nama_kemdaraan" id="nama_kendaraan" placeholder="Enter product name" required>
                              </div>
                              <div class="col-md-12 mb-3">
                                  <label for="harga_sewa" class="form-label">Harga Sewa</label>
                                  <input type="text" class="form-control" name="harga_sewa" id="harga_sewa" placeholder="Enter product name" required>
                              </div>
                              <div class="col-md-12 mb-3">
                                  <label for="kategori" class="form-label">Nama Kategori</label>
                                  <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Enter product name" required>
                              </div>
                              <div class="col-md-12 mb-3">
                                  <label for="status" class="form-label">Status</label>
                                   <select class="form-control" name="status" id="status" required>
                                      <option value="">Select Status</option>
                                      <option value="tersedia">Disewa</option>
                                      <option value="tersedia">Perbaikan</option>
                                      <option value="tidak_tersedia">Ready</option>
                                  </select>
                              </div>

                              <div class="d-flex gap-2">
                                  <button type="submit" class="btn btn-primary">Add Product</button>
                              </div>

                          </form>
                      </div>
                  </div>


              </div>

          </div>

          <div class="row">
              <div class="col-12">
                  <footer class="text-center py-2 mt-6 text-secondary ">
                      <p class="mb-0">Copyright © 2026 InApp Inventory Dashboard. Developed by <a href="https://codescandy.com/" target="_blank" class="text-primary">CodesCandy</a> • Distributed by <a href="https://themewagon.com/" target="_blank" class="text-primary">ThemeWagon</a> </p>
                  </footer>
              </div>

          </div>

      </div>
  </main>