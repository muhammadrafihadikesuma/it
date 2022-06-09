<?php
require 'config.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM planning WHERE
							id_planning='$id'");
$edit = mysqli_fetch_array($query);

?>


<!-- ======= Header ======= -->
<?php require 'header.php'; ?>
<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php require 'sidebar.php'; ?>
<!-- End Sidebar-->

<body>


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>EDIT RENCANA KERJA</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="data_kegiatan.php">Data Rencana Kerja</a></li>
                    <li class="breadcrumb-item active">Edit Rencana Kerja</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Rencana Kerja</h5>

                            <!-- General Form Elements -->
                            <form action="api_editstatuskegiatan.php" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id_planning" value="<?php echo "$edit[id_planning]" ?>">

                                <!-- Tanggal Pengerjaan -->
                                <div class="col-12">
                                    <div id="datetimepicker2" class="form-floating mb-3">
                                        <input type="date" name="date_w" class="form-control" id="tanggalbeli" value="<?php echo "$edit[date_w]" ?>" required>
                                        <label for="tanggalbeli">Tanggal Pengerjaan</label>
                                    </div>
                                </div>

                                <!-- Tanggal Selesai -->
                                <div class="col-12">
                                    <div id="datetimepicker2" class="form-floating mb-3">
                                        <input type="date" name="date_f" class="form-control" id="tanggalbeli" value="<?php echo "$edit[date_f]" ?>">
                                        <label for="tanggalbeli">Tanggal Selesai</label>
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="floatingOrder" name="status" required>
                                            <option selected disabled value>- Pilih Status -</option>
                                            <option <?php if ($edit['status'] == 'waiting') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="waiting">Menunggu Antrian Pengerjaan...</option>
                                            <option <?php if ($edit['status'] == 'work') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="work">Sedang Di Kerjakan...</option>
                                            <option <?php if ($edit['status'] == 'finish') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="finish">Selesai</option>
                                        </select>
                                        <label for="floatingOrder">Status</label>
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