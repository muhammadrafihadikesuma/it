<?php
require 'config.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM masters WHERE
							id_master='$id'");
$edit = mysqli_fetch_array($query);

?>

<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>EDIT DATA MASTER</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="tables_master.php">Data master</a></li>
                    <li class="breadcrumb-item active">Edit Data Master</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Data Master &nbsp; <i class="bi bi-person-fill"></i> <?php echo "$edit[user]" ?></h5>

                            <!-- General Form Elements -->
                            <form action="api_editmaster.php" method="POST">

                                <!-- DIVISI -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="floatingDivisi" name="divisi" required>
                                            <option <?php if ($edit['divisi'] === 'RO') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value='RO'>RO</option>

                                            <option <?php if ($edit['divisi'] === 'PKS') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value='PKS'>PKS</option>

                                            <option <?php if ($edit['divisi'] === 'OP96') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value='OP96'>OP 96</option>

                                            <option <?php if ($edit['divisi'] === 'OP97A') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value='OP97A'>OP 97A</option>

                                            <option <?php if ($edit['divisi'] === 'OP97B') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value='OP97B'>OP 97B</option>

                                            <option <?php if ($edit['divisi'] === 'OP97C') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value="OP97C">OP 97C</option>

                                            <option <?php if ($edit['divisi'] === 'OP97D') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value="OP97D">OP 97D</option>

                                            <option <?php if ($edit['divisi'] === 'OP98A') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value="OP98A">OP 98A</option>

                                            <option <?php if ($edit['divisi'] === 'OP98B') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value="OP98B">OP 98B</option>

                                            <option <?php if ($edit['divisi'] === 'OP98C') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value="OP98C">OP 98C</option>

                                            <option <?php if ($edit['divisi'] === 'OP98D') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value="OP98D">OP 98D</option>

                                            <option <?php if ($edit['divisi'] === 'OP99') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value="OP99">OP 99</option>

                                            <option <?php if ($edit['divisi'] === 'OP20034') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value="OP20034">OP 2003/2004</option>

                                            <option <?php if ($edit['divisi'] === 'OP2005A') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value="OP2005A">OP 2005A</option>

                                            <option <?php if ($edit['divisi'] === 'OP2005B') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value="OP2005B">OP 2005B</option>

                                            <option <?php if ($edit['divisi'] === 'OP2006A') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value="OP2006A">OP 2006A</option>

                                            <option <?php if ($edit['divisi'] === 'OP2006B') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value="OP2006B">OP 2006B</option>

                                            <option <?php if ($edit['divisi'] === 'OP2007A') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value="OP2007A">OP 2007A</option>

                                            <option <?php if ($edit['divisi'] === 'OP2007B') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value="OP2007B">OP 2007B</option>

                                            <option <?php if ($edit['divisi'] === 'OP2008') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value="OP2008">OP 2008</option>

                                            <option <?php if ($edit['divisi'] === 'NURSERY') {
                                                        # code...
                                                        echo "selected";
                                                    } ?> value='NURSERY'>NURSERY</option>
                                        </select>
                                        <label for="floatingDivisi">Divisi</label>
                                    </div>
                                </div>

                                <!-- TYPE -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="type" name="type" placeholder="Masukkan" onkeyup="myType()" value="<?php echo "$edit[type]" ?>" required>
                                    <label for="type">Type</label>
                                </div>

                                <!-- MERK -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="merk" name="merk" placeholder="Masukkan" onkeyup="myMerk()" value="<?php echo "$edit[merk]" ?>" required>
                                    <label for="merk">Merk</label>
                                </div>

                                <!-- TANGGAL BELI -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="tanggalbeli" name="tanggalbeli" value="<?php echo "$edit[tgl_beli]" ?>" required>
                                        <label for="tanggalbeli">Tanggal Beli</label>
                                    </div>
                                </div>

                                <!-- USER -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="user" name="user" placeholder="Masukkan" onkeyup="myUser()" value="<?php echo "$edit[user]" ?>" required>
                                    <label for="user">User</label>
                                </div>

                                <!-- MAINBOARD -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="mainboard" name="mainboard" placeholder="Masukkan" onkeyup="myMainboard()" value="<?php echo "$edit[mainboard]" ?>" required>
                                    <label for="mainboard">Mainboard</label>
                                </div>

                                <!-- PROCESSOR -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="processor" name="processor" placeholder="Masukkan" onkeyup="myProcessor()" value="<?php echo "$edit[processor]" ?>" required>
                                    <label for="processor">Processor</label>
                                </div>

                                <!-- RAM -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="ram" name="ram" placeholder="Masukkan" onkeyup="myRam()" value="<?php echo "$edit[ram]" ?>" required>
                                    <label for="ram">RAM</label>
                                </div>

                                <!-- HARDDISK -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="harddisk" name="harddisk" placeholder="Masukkan" onkeyup="myHarddisk()" value="<?php echo "$edit[harddisk]" ?>" required>
                                    <label for="harddisk">Harddisk / SSD</label>
                                </div>

                                <!-- CASING -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="casing" name="casing" placeholder="Masukkan" onkeyup="myCasing()" value="<?php echo "$edit[casing]" ?>" required>
                                    <label for="casing">Casing</label>
                                </div>

                                <!-- WINDOWS EDITION -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="windowse" name="windowse" placeholder="Masukkan" onkeyup="myWindowse()" value="<?php echo "$edit[wdw_edition]" ?>" required>
                                    <label for="windowse">Windows Edition</label>
                                </div>

                                <!-- WINDOWS VERSION -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="windowsv" name="windowsv" placeholder="Masukkan" onkeyup="myWindowsv()" value="<?php echo "$edit[wdw_version]" ?>" required>
                                    <label for="windowsv">Windows Version</label>
                                </div>

                                <!-- LICENSES PC -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="licensespc" name="licensespc" placeholder="Masukkan" onkeyup="myLicensespc()" value="<?php echo "$edit[licenses_pc]" ?>" required>
                                    <label for="licensespc">Licenses PC</label>
                                </div>

                                <!-- OFFICE -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="office" name="office" placeholder="Masukkan" onkeyup="myOffice()" value="<?php echo "$edit[office]" ?>" required>
                                    <label for="office">Office</label>
                                </div>

                                <!-- LICENSES OFFICE -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="licensesof" name="licensesof" placeholder="Masukkan" onkeyup="myLicensesof()" value="<?php echo "$edit[licenses_office]" ?>" required>
                                    <label for="licensesof">Licenses Office</label>
                                </div>

                                <!-- SPESIFIKASI LAINNYA -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="spesifikasi" name="spesifikasi" placeholder="Masukkan" onkeyup="mySpesifikasi()" value="<?php echo "$edit[other_spec]" ?>" required>
                                    <label for="spesifikasi">Spesifikasi Lainnya</label>
                                </div>

                                <!-- STATUS -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="status" name="status" placeholder="Masukkan" onkeyup="myStatus()" value="<?php echo "$edit[status]" ?>" required>
                                    <label for="status">Status</label>
                                </div>

                                <!-- AGE -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="age" name="age" placeholder="Masukkan" onkeyup="myAge()" value="<?php echo "$edit[age]" ?>" required>
                                    <label for="age">Age</label>
                                </div>

                                <!-- UPS -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="ups" name="ups" placeholder="Masukkan" onkeyup="myUps()" value="<?php echo "$edit[ups]" ?>" required>
                                    <label for="ups">UPS</label>
                                </div>

                                <!-- PRINTER -->
                                <div class="col-12"></div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="printer" name="printer" placeholder="Masukkan" onkeyup="myPrinter()" value="<?php echo "$edit[printer]" ?>" required>
                                    <label for="printer">Printer</label>
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