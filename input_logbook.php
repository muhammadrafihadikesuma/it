<!-- ======= Header ======= -->
<?php require 'header.php'; ?>
<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php require 'sidebar.php'; ?>
<!-- End Sidebar-->

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>INPUT LOGBOOK</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="data_logbook.php">Data Logbook</a></li>
                    <li class="breadcrumb-item active">Input Logbook</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <?php
        require 'config.php';

        $id = $_SESSION ['id'];
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
                            <h5 class="card-title">Input Logbook</h5>

                            <!-- General Form Elements -->
                            <form action="api_inputlogbook.php" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id_logbook">
                                <input type="hidden" class="form-control" id="id" name="id_author" value="<?php echo $id_author ?>">


                                <!-- Areal -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="areal" placeholder="Masukkan" id="1" onkeyup="my1()" required>
                                        <label for="1">Areal</label>
                                    </div>
                                </div>

                                <!-- Date -->
                                <div class="col-12">
                                    <div id="datetimepicker2" class="form-floating mb-3">
                                        <input type="datetime-local" data-format="dd/MM/yyyy h:i:s" value="<?php echo date("Y-m-d\TH:i:s", time()); ?>" class="form-control" id="tanggalbeli" name="date" required>
                                        <label for="tanggalbeli">Tanggal</label>
                                    </div>
                                </div>

                                <!-- Kategori-->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="kategori" placeholder="Masukkan" id="2" onkeyup="my2()" required>
                                        <label for="2">Kategori</label>
                                    </div>
                                </div>

                                <!-- User-->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="user" placeholder="Masukkan" id="3" onkeyup="my3()" required>
                                        <label for="3">User</label>
                                    </div>
                                </div>

                                <!-- kasus -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="kasus" placeholder="Masukkan" id="4" onkeyup="my4()" required>
                                        <label for="4">Kasus</label>
                                    </div>
                                </div>

                                <!-- Penyelesaian -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="penyelesaian" placeholder="Masukkan" id="5" onkeyup="my5()" required>
                                        <label for="5">Penyelesaian</label>
                                    </div>
                                </div>

                                <!-- Keterangan -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="6" name="keterangan" data-enable-grammarly="false" placeholder="Masukkan Keluhan Pasien" style="height: 150px;" onkeyup="my6()" required></textarea>
                                    <label for="6">Keterangan</label>
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