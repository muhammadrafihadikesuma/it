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
            <h1>INPUT RENCANA KERJA</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="data_kegiatan.php">Data Rencana Kerja</a></li>
                    <li class="breadcrumb-item active">Input Rencana Kerja</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Input Rencana Kerja</h5>

                            <!-- General Form Elements -->
                            <form action="api_inputkegiatan.php" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id_planning">
                                <input type="hidden" class="form-control" id="id" name="id_author" value="<?php echo $id_author ?>">

                                <!-- Tanggal Perencanaan-->
                                <div class="col-12">
                                    <div id="datetimepicker2" class="form-floating mb-3">
                                        <input type="date" name="date" class="form-control" id="tanggalbeli" required>
                                        <label for="tanggalbeli">Tanggal Masuk Rencana Kegiatan</label>
                                    </div>
                                </div>

                                <!-- Tanggal Mulai Pengerjaan-->
                                <div class="col-12">
                                    <div id="datetimepicker2" class="form-floating mb-3">
                                        <input type="date" name="date_w" class="form-control" id="tanggalbeli" required>
                                        <label for="tanggalbeli">Tanggal Mulai Pengerjaan</label>
                                    </div>
                                </div>

                                <!-- Tanggal Selesai-->
                                <div class="col-12">
                                    <div id="datetimepicker2" class="form-floating mb-3">
                                        <input type="date" name="date_f" class="form-control" id="tanggalselesai">
                                        <label for="tanggalselesai">Tanggal Selesai</label>
                                    </div>
                                </div>

                                <!-- Nama Kegiatan -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="kegiatan" placeholder="Masukkan" id="1" onkeyup="my1()" data-enable-grammarly="false" style="height: 150px;" required></textarea>
                                        <label for="divisi">Kegiatan</label>
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="floatingOrder" name="status" required>
                                            <option selected disabled value>- Pilih Status -</option>
                                            <option value="waiting">Menunggu Antrian Pengerjaan...</option>
                                            <option value="work">Sedang Di Kerjakan</option>
                                            <option value="finish">Selesai</option>
                                        </select>
                                        <label for="floatingOrder">Status</label>
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