<?php
require 'config.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM receipt WHERE
							id_receipt='$id'");
$edit = mysqli_fetch_array($query);

?>

<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>

<body>

    <?php
    require 'config.php';

    $id = $_SESSION['id'];
    $query = mysqli_query($koneksi, " SELECT * FROM users WHERE id='$id'");
    while ($read = mysqli_fetch_array($query)) {
        $id_author = $read['id'];
    }
    ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Analisa </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="data_analisa.php">Data Analisa</a></li>
                    <li class="breadcrumb-item active">Analisa</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Analisa &nbsp; <i class="bi bi-person-fill"></i> <?php echo "$edit[nama_penerima]" ?> | <?php echo "$edit[date]" ?> </h5>

                            <!-- General Form Elements -->
                            <form action="api_inputanalisa.php" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id_receipt" value="<?php echo "$edit[id_receipt]" ?>">
                                <input type="hidden" class="form-control" id="id" name="id_author" value="<?php echo $id_author ?>">

                                <!-- Nama Pengirim -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="1" name="nama_pengirim" value="<?php echo "$edit[nama_pengirim]" ?>" placeholder="Masukkan" onkeyup="my1()" readonly>
                                        <label for="1">Nama Pengirim</label>
                                    </div>
                                </div>

                                <!-- Nama Penerima -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="2" name="nama_penerima" value="<?php echo "$edit[nama_penerima]" ?>" placeholder="Masukkan" onkeyup="my2()" readonly>
                                        <label for="2">Nama Penerima</label>
                                    </div>
                                </div>

                                <!-- Jabatan -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="3" name="jabatan" placeholder="Masukkan" value="<?php echo "$edit[jabatan]" ?>" onkeyup="my3()" readonly>
                                        <label for="3">Jabatan</label>
                                    </div>
                                </div>

                                <!-- Nama Barang -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="4" name="nama_barang" placeholder="Masukkan" value="<?php echo "$edit[nama_barang]" ?>" onkeyup="my4()" readonly>
                                        <label for="4">Nama Barang</label>
                                    </div>
                                </div>

                                <!-- Jumlah Unit -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="5" name="jumlah_unit" placeholder="Masukkan" value="<?php echo "$edit[jumlah_unit]" ?>" onkeyup="my5()" readonly>
                                        <label for="5">Jumlah Unit</label>
                                    </div>
                                </div>

                                <!-- STATUS -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="status" placeholder="Masukkan" value="selesai" id="9" onkeyup="my9()" readonly>
                                    <label for="9">Status</label>
                                </div>

                                <!-- Kerusakan -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="8" name="kerusakan" data-enable-grammarly="false" style="height: 150px;" placeholder="Masukkan" onkeyup="my8()" readonly><?php echo "$edit[kerusakan]" ?>  </textarea>
                                        <label for="8">Kerusakan</label>
                                    </div>
                                </div>

                                <!-- Divisi -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="floatingDivisi" name="divisi" required>
                                            <option selected disabled value>Pilih Divisi</option>
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

                                <!-- Analisa Kerusakan -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="2" name="dmg_analysis" placeholder="Masukkan" onkeyup="my2()" data-enable-grammarly="false" style="height: 150px;" required></textarea>
                                        <label for="2">Analisa Kerusakan</label>
                                    </div>
                                </div>

                                <!-- Barang Yang Di Ganti -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="3" name="itm_replacement" placeholder="Masukkan" onkeyup="my3()" required>
                                        <label for="3">Barang Yang Di Ganti</label>
                                    </div>
                                </div>

                                <!-- Tanggal -->
                                <div class="col-12">
                                    <div id="datetimepicker2" class="form-floating mb-3">
                                        <input type="datetime-local" data-format="dd/MM/yyyy hh:mm:ss" value="<?php echo date("Y-m-d\TH:i:s", time()); ?>" class="form-control" id="tanggalbeli" name="date_an" required>
                                        <label for="tanggalbeli">Tanggal</label>
                                    </div>
                                </div>

                                <!-- Author -->
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