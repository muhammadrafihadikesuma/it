<?php
require 'config.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM exit_item WHERE
							id_item='$id'");
$edit = mysqli_fetch_array($query);

?>

<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>EDIT BARANG KELUAR</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="data_barangkeluar.php">Data Barang Keluar</a></li>
                    <li class="breadcrumb-item active">Edit Barang Keluar</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit BARANG KELUAR &nbsp; <i class="bi bi-person-fill"></i> <?php echo "$edit[nama_penerima]" ?> | <?php echo "$edit[date]" ?> </h5>

                            <!-- General Form Elements -->
                            <form action="api_editkeluar.php" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id_item" value="<?php echo "$edit[id_item]" ?>">

                                <!-- Nama Pengirim -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="divisi" name="nama_pengirim" placeholder="Masukkan" onkeyup="myDivisi()" value="<?php echo "$edit[nama_pengirim]" ?>" required>
                                        <label for="divisi">Nama Pengirim</label>
                                    </div>
                                </div>

                                <!-- Nama Penerima -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="type" name="nama_penerima" placeholder="Masukkan" onkeyup="myType()" value="<?php echo "$edit[nama_penerima]" ?>" required>
                                        <label for="type">Nama Penerima</label>
                                    </div>
                                </div>

                                <!-- Tanggal -->
                                <div class="col-12">
                                    <div id="datetimepicker2" class="form-floating mb-3">
                                        <input type="datetime-local" data-format="dd/MM/yyyy hh:mm:ss" class="form-control" id="tanggalbeli" name="date" value="<?php echo date("Y-m-d\TH:i:s", time()); ?>" required>
                                        <label for="tanggalbeli">Tanggal</label>
                                    </div>
                                </div>

                                <!-- Jabatan -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="user" name="jabatan" placeholder="Masukkan" onkeyup="myUser()" value="<?php echo "$edit[jabatan]" ?>" required>
                                        <label for="user">Jabatan</label>
                                    </div>
                                </div>

                                <!-- Nama Barang -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="mainboard" name="nama_barang" placeholder="Masukkan" onkeyup="myMainboard()" value="<?php echo "$edit[nama_barang]" ?>" required>
                                        <label for="mainboard">Nama Barang</label>
                                    </div>
                                </div>

                                <!-- Jumlah Unit -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="processor" name="jumlah_unit" placeholder="Masukkan" onkeyup="myProcessor()" value="<?php echo "$edit[jumlah_unit]" ?>" required>
                                        <label for="processor">Jumlah Unit</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="author" name="author" value="<?php echo "$edit[author]" ?>" readonly>
                                        <label for="author">Author</label>
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
    <?php require 'footer.php'; ?>