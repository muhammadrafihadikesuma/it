<!-- ======= Header ======= -->
<?php require 'header.php'; ?>
<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php require 'sidebar.php'; ?>
<!-- End Sidebar-->

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>INPUT TANDA TERIMA</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="data_tandaterima.php">Data Tanda Terima</a></li>
                    <li class="breadcrumb-item active">Input Tanda Terima</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <?php
        require 'config.php';

        $id = $_SESSION['id'];
        $query = mysqli_query($koneksi, " SELECT * FROM users WHERE id='$id'");
        while ($read = mysqli_fetch_array($query)) {
            $id_author = $read['id'];
            $author = $read['nama'];
        }
        ?>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Input Tanda Terima</h5>

                            <!-- General Form Elements -->
                            <form action="api_inputterima.php" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id_receipt">
                                <input type="hidden" class="form-control" id="id" name="id_author" value="<?php echo $id_author ?>">

                                <!-- Nama Pengirim -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">

                                        <input type="text" class="form-control" name="nama_pengirim" placeholder="Masukkan" id="1" onkeyup="my1()" required>
                                        <label for="divisi">Nama Pengirim</label>
                                    </div>
                                </div>

                                <!-- Nama Penerima -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="nama_penerima" value="<?php echo $author ?>" placeholder="Masukkan" id="2" onkeyup="my2()" readonly>
                                        <label for="type">Nama Penerima</label>
                                    </div>
                                </div>

                                <!-- Tanggal -->
                                <div class="col-12">
                                    <div id="datetimepicker2" class="form-floating mb-3">
                                        <input type="datetime-local" data-format="dd/MM/yyyy h:i:s" value="<?php echo date("Y-m-d\TH:i:s", time()); ?>" class="form-control" id="3" name="date" required>
                                        <label for="tanggalbeli">Tanggal</label>
                                    </div>
                                </div>

                                <!-- Jabatan -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="jabatan" placeholder="Masukkan" id="4" onkeyup="my4()" required>
                                        <label for="user">Jabatan & Estate Pengirim</label>
                                    </div>
                                </div>

                                <!-- Nama Barang -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan" id="5" onkeyup="my5()" required>
                                        <label for="mainboard">Nama Barang</label>
                                    </div>
                                </div>

                                <!-- Jumlah Unit -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="jumlah_unit" placeholder="Masukkan" id="6" onkeyup="my6()" required>
                                        <label for="processor">Jumlah Unit</label>
                                    </div>
                                </div>

                                <!-- Kerusakan -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="kerusakan" data-enable-grammarly="false" placeholder="Masukkan" style="height: 150px;" id="7" onkeyup="my7()" required></textarea>
                                    <label for="floatingKeluhan">Kerusakan</label>
                                </div>

                                <!-- STATUS -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="status" placeholder="Masukkan" value="analisa" id="9" onkeyup="my9()" readonly>
                                    <label for="9">Status</label>
                                </div>

                                <!-- Author -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" value="<?php echo $author ?>" name="author" placeholder="Masukkan" id="5" onkeyup="my7()" readonly>
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