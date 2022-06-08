<!-- ======= Header ======= -->
<?php require 'header.php'; ?>
<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php require 'sidebar.php'; ?>
<!-- End Sidebar-->

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>INPUT DATA MASTER</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="tables_master.php">Data master</a></li>
                    <li class="breadcrumb-item active">Input Data Master</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Input Data Master</h5>

                            <!-- General Form Elements -->
                            <form action="api_inputmaster.php" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id">

                                <!-- DIVISI -->
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

                                <!-- TYPE -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="2" name="type" placeholder="Masukkan" onkeyup="my2()" required>
                                        <label for="2">Type</label>
                                    </div>
                                </div>

                                <!-- MERK -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="3" name="merk" placeholder="Masukkan" onkeyup="my3()" required>
                                        <label for="3">Merk</label>
                                    </div>
                                </div>

                                <!-- TANGGAL BELI -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="datetime-local" class="form-control" value="<?php echo date("Y-m-d\TH:i:s", time()); ?>" id="tanggalbeli" name="tanggalbeli" required>
                                        <label for="tanggalbeli">Tanggal Beli</label>
                                    </div>
                                </div>

                                <!-- USER -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="4" name="user" placeholder="Masukkan" onkeyup="my4()" required>
                                        <label for="4">User</label>
                                    </div>
                                </div>

                                <!-- MAINBOARD -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="5" name="mainboard" placeholder="Masukkan" onkeyup="my5()" required>
                                        <label for="mainboard">Mainboard</label>
                                    </div>
                                </div>

                                <!-- PROCESSOR -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="6" name="processor" placeholder="Masukkan" onkeyup="my6()" required>
                                        <label for="6">Processor</label>
                                    </div>
                                </div>

                                <!-- RAM -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="7" name="ram" placeholder="Masukkan" onkeyup="my7()" required>
                                        <label for="7">RAM</label>
                                    </div>
                                </div>

                                <!-- HARDDISK -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="8" name="harddisk" placeholder="Masukkan" onkeyup="my8()" required>
                                        <label for="8">Harddisk / SSD</label>
                                    </div>
                                </div>

                                <!-- CASING -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="9" name="casing" placeholder="Masukkan" onkeyup="my9()" required>
                                        <label for="9">Casing</label>
                                    </div>
                                </div>

                                <!-- WINDOWS EDITION -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="10" name="windowse" placeholder="Masukkan" onkeyup="my10()" required>
                                        <label for="10">Windows Edition</label>
                                    </div>
                                </div>

                                <!-- WINDOWS VERSION -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="11" name="windowsv" placeholder="Masukkan" onkeyup="my11()" required>
                                        <label for="11">Windows Version</label>
                                    </div>
                                </div>

                                <!-- LICENSES PC -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="floatingDivisi" name="licensespc" required>
                                            <option selected disabled value>Pilih Licenses</option>
                                            <option value="YES">YES</option>
                                            <option value="NO">NO</option>
                                        </select>
                                        <label for="floatingDivisi">Pilih Licenses PC</label>
                                    </div>
                                </div>

                                <!-- OFFICE -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="13" name="office" placeholder="Masukkan" onkeyup="my13()" required>
                                        <label for="13">Office</label>
                                    </div>
                                </div>

                                <!-- LICENSES OFFICE -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="14" name="licensesof" placeholder="Masukkan" onkeyup="my14()" required>
                                        <label for="14">Licenses Office</label>
                                    </div>
                                </div>

                                <!-- SPESIFIKASI LAINNYA -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="15" name="spesifikasi" placeholder="Masukkan" onkeyup="my15()" required>
                                        <label for="15">Spesifikasi Lainnya</label>
                                    </div>
                                </div>

                                <!-- STATUS -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="16" name="status" placeholder="Masukkan" onkeyup="my16()" required>
                                        <label for="16">Status</label>
                                    </div>
                                </div>

                                <!-- AGE -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="17" name="age" placeholder="Masukkan" onkeyup="my17()" required>
                                        <label for="17">Age</label>
                                    </div>
                                </div>

                                <!-- UPS -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="18" name="ups" placeholder="Masukkan" onkeyup="my18()" required>
                                        <label for="18">UPS</label>
                                    </div>
                                </div>

                                <!-- PRINTER -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="19" name="printer" placeholder="Masukkan" onkeyup="my19()" required>
                                        <label for="19">Printer</label>
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