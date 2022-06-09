<!-- ======= Header ======= -->
<?php require 'header.php'; ?>
<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php require 'sidebar.php'; ?>
<!-- End Sidebar-->

<body>
    <?php
    require 'config.php';
    $id = $_SESSION['id'];
    $query = mysqli_query($koneksi, " SELECT * FROM users WHERE id='$id'");
    while ($read = mysqli_fetch_array($query)) {
        $author = $read['nama'];
        $id_author = $read['id'];
    }
    ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>INPUT ORDER LOKAL</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="data_order.php">Data Order Lokal</a></li>
                    <li class="breadcrumb-item active">Input Order Lokal</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Input Order Lokal</h5>

                            <!-- General Form Elements -->
                            <form action="api_inputorder.php" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id_order">
                                <input type="hidden" class="form-control" id="id" name="id_author" value="<?php echo $id_author ?>">

                                <!-- Tanggal -->
                                <div class="col-12">
                                    <div id="datetimepicker2" class="form-floating mb-3">
                                        <input type="datetime-local" name="date" data-format="dd/MM/yyyy hh:mm:ss" value="<?php echo date("Y-m-d\TH:i:s", time()); ?>" class="form-control" id="tanggalbeli" required>
                                        <label for="tanggalbeli">Tanggal</label>
                                    </div>
                                </div>

                                <!-- Nama Barang -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan" id="1" onkeyup="my1()" required>
                                        <label for="divisi">Nama Barang</label>
                                    </div>
                                </div>

                                <!-- Satuan -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="satuan" placeholder="Masukkan" id="2" onkeyup="my2()" required>
                                        <label for="type">Satuan</label>
                                    </div>
                                </div>

                                <!-- Divisi -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="floatingDivisi" name="divisi" required>
                                            <option selected disabled value>- Pilih Divisi</option>
                                            <option value="RO">RO</option>
                                            <option value="PKS">PKS</option>
                                            <option value="OP96">OP 96</option>
                                            <option value="OP97A">OP 97A</option>
                                            <option value="OP97B">OP 97B</option>
                                            <option value="OP97C">OP 97C</option>
                                            <option value="OP97D">OP 97D</option>
                                            <option value="OP98A">OP 98A</option>
                                            <option value="OP98B">OP 98B</option>
                                            <option value="OP98C">OP 98C</option>
                                            <option value="OP98D">OP 98D</option>
                                            <option value="OP99">OP 99</option>
                                            <option value="OP20034">OP 2003/2004</option>
                                            <option value="OP2005A">OP 2005A</option>
                                            <option value="OP2005B">OP 2005B</option>
                                            <option value="OP2006A">OP 2006A</option>
                                            <option value="OP2006B">OP 2006B</option>
                                            <option value="OP2007A">OP 2007A</option>
                                            <option value="OP2007B">OP 2007B</option>
                                            <option value="OP2008">OP 2008</option>
                                            <option value="NURSERY">NURSERY</option>
                                        </select>
                                        <label for="floatingDivisi">Divisi</label>
                                    </div>
                                </div>

                                <!-- User -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="user" placeholder="Masukkan" id="4" onkeyup="my4()" required>
                                        <label for="user">User</label>
                                    </div>
                                </div>

                                <!-- Remark -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="6" name="remark" data-enable-grammarly="false" placeholder="Masukkan Keluhan Pasien" style="height: 150px;" onkeyup="my6()" required></textarea>
                                    <label for="6">Remark</label>
                                </div>

                                <!-- Status Order -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="floatingOrder" name="status_order">
                                            <option selected disabled value>- Pilih Status Order -</option>
                                            <option value="waiting">Menunggu</option>
                                            <option value="yes">Disetujui</option>
                                            <option value="no">Ditolak</option>
                                        </select>
                                        <label for="floatingOrder">Status Order</label>
                                    </div>
                                </div>

                                <!-- Status PO -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="status_po" value="pending" placeholder="Masukkan" id="7" onkeyup="my7()" readonly>
                                        <label for="user">Status PO</label>
                                    </div>
                                </div>

                                <!-- Status CERF -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="status_cerf" value="no" placeholder="Masukkan" id="7" onkeyup="my9()" readonly>
                                        <label for="user">Status CERF</label>
                                    </div>
                                </div>

                                <!-- Author -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" value="<?php echo $author ?>" name="author" placeholder="Masukkan" id="5" onkeyup="my8()" readonly>
                                        <label for="5">Author</label>
                                    </div>
                                </div>

                                <div class="col-sm-10 text-center">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>

                            </form>
                            <!-- End General Form Elements -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php require 'footer.php'; ?>