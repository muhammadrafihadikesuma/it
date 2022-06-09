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
                            <form action="api_editkegiatan.php" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id_planning" value="<?php echo "$edit[id_planning]" ?>">

                                <!-- Nama Kegiatan -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="kegiatan" placeholder="Masukkan" id="1" onkeyup="my1()" data-enable-grammarly="false" style="height: 150px;" required><?php echo "$edit[kegiatan]" ?></textarea>
                                        <label for="divisi">Kegiatan</label>
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