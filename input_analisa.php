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
        $id_author = $read['id'];
        $author = $read['nama'];
    }
    $query = mysqli_query($koneksi, " SELECT * FROM receipt ");
    while ($reads = mysqli_fetch_array($query)) {
        $id_receipt = $reads['id_receipt'];
        $id_author = $reads['id_author'];
        $nama_penerima = $reads['nama_penerima'];
        $jabatan = $reads['jabatan'];
        $nama_barang = $reads['nama_barang'];
        $jumlah_unit = $reads['jumlah_unit'];
        $kerusakan = $reads['kerusakan'];
    }
    ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>INPUT ANALISA</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="data_analisa.php">Data Analisa</a></li>
                    <li class="breadcrumb-item active">Input Analisa</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Input Analisa</h5>

                            <!-- General Form Elements -->
                            <form action="api_inputanalisa.php" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id_analysis">
                                <input type="hidden" class="form-control" id="id" name="id_author" value="<?php echo $id_author ?>">
                                <input type="hidden" class="form-control" id="id" name="id_receipt" value="<?php echo $id_receipt ?>">

                                <!-- Nama Penerima -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" value="<?php echo $nama_penerima ?>" name="nama_penerima" placeholder="Masukkan" id="10" onkeyup="my10()" readonly>
                                        <label for="10">Nama Penerima</label>
                                    </div>
                                </div>

                                <!-- Jabatan -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" value="<?php echo $jabatan ?>" name="jabatan" placeholder="Masukkan" id="9" onkeyup="my9()" readonly>
                                        <label for="9">Jabatan</label>
                                    </div>
                                </div>

                                <!-- Nama Barang -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" value="<?php echo $nama_barang ?>" name="nama_barang" placeholder="Masukkan" id="8" onkeyup="my8()" readonly>
                                        <label for="8">Nama Barang</label>
                                    </div>
                                </div>

                                <!-- Jumlah Unit -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" value="<?php echo $jumlah_unit ?>" name="jumlah_unit" placeholder="Masukkan" id="7" onkeyup="my7()" readonly>
                                        <label for="7">Jumlah Unit</label>
                                    </div>
                                </div>


                                <!-- Kerusakan -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" value="<?php echo $kerusakan ?>" name="kerusakan" placeholder="Masukkan" id="6" onkeyup="my6()" readonly>
                                        <label for="6">Kerusakan</label>
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
                                        <input type="datetime-local" data-format="dd/MM/yyyy hh:mm:ss" value="<?php echo date("Y-m-d\TH:i:s", time()); ?>" class="form-control" id="tanggalbeli" name="date" required>
                                        <label for="tanggalbeli">Tanggal</label>
                                    </div>
                                </div>

                                <!-- Author -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" value="<?php echo $author ?>" name="author" placeholder="Masukkan" id="4" onkeyup="my4()" readonly>
                                        <label for="4">Author</label>
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