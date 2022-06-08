<?php
        date_default_timezone_set('Asia/Jakarta');
require 'config.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM logbook WHERE
							id_logbook='$id'");
$edit = mysqli_fetch_array($query);

?>

<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>EDIT LOGBOOK</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="data_logbook.php">Data Logbook</a></li>
                    <li class="breadcrumb-item active">Edit Logbook</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Data Logbook &nbsp; <i class="bi bi-person-fill"></i> <?php echo "$edit[areal]" ?></h5>

                            <!-- General Form Elements -->
                            <form action="api_editlogbook.php" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id_logbook" value="<?php echo "$edit[id_logbook]"?>">

                                <!-- Areal -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="type" name="areal" value="<?php echo "$edit[areal]"?>" placeholder="Masukkan"  onkeyup="myType()" required>
                                        <label for="type">Areal</label>
                                    </div>
                                </div>

                                <!-- Date -->
                                <div class="col-12">
                                    <div id="datetimepicker2" class="form-floating mb-3">
                                        <input type="datetime-local" data-format="dd/MM/yyyy hh:mm:ss" class="form-control" id="tanggalbeli" name="date" value="<?php echo date("Y-m-d\TH:i:s", time()); ?>" required>
                                        <label for="tanggalbeli">Tanggal</label>
                                    </div>
                                </div>

                                <!-- Kategori-->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="user" name="kategori" value="<?php echo "$edit[kategori]"?>" placeholder="Masukkan" onkeyup="myUser()" required>
                                        <label for="user">Kategori</label>
                                    </div>
                                </div>

                                <!-- User-->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="user" name="user" value="<?php echo "$edit[user]"?>" placeholder="Masukkan" onkeyup="myUser()" required>
                                        <label for="user">User</label>
                                    </div>
                                </div>

                                <!-- kasus -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="mainboard" name="kasus" value="<?php echo "$edit[kasus]"?>" placeholder="Masukkan" onkeyup="myMainboard()" required>
                                        <label for="mainboard">Kasus</label>
                                    </div>
                                </div>

                                <!-- Penyelesaian -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="processor" name="penyelesaian" value="<?php echo "$edit[penyelesaian]"?>" placeholder="Masukkan" onkeyup="myProcessor()" required>
                                        <label for="processor">Penyelesaian</label>
                                    </div>
                                </div>

                                <!-- Keterangan -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="floatingKeluhan" name="keterangan" data-enable-grammarly="false" placeholder="Masukkan Keluhan Pasien" style="height: 150px;" onkeyup="myRam()"  required><?php echo "$edit[keterangan]"?></textarea>
                                    <label for="floatingKeluhan">Keterangan</label>
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


                </form><!-- End General Form Elements -->

            </div>
            </div>

            </div>
            </div>
        </section>

    </main><!-- End #main -->
    <?php require 'footer.php'; ?>