<?php
require 'config.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM analysis WHERE
							id_analysis='$id'");
$edit = mysqli_fetch_array($query);

?>

<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>EDIT ANALISA</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="data_analisa.php">Data Analisa</a></li>
                    <li class="breadcrumb-item active">Edit Analisa</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Analisa &nbsp; <i class="bi bi-person-fill"></i> <?php echo "$edit[divisi]" ?> | <?php echo "$edit[date]" ?> </h5>


                            <!-- General Form Elements -->
                            <form action="api_editanalisa.php" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id_analysis" value="<?php echo "$edit[id_analysis]" ?>">
                                <input type="hidden" class="form-control" id="id" name="id_receipt" value="<?php echo "$edit[id_receipt]" ?>">

                                <!-- divisi -->
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

                                <!-- Analisa Kerusakan -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="type" name="dmg_analysis" placeholder="Masukkan" onkeyup="myType()" data-enable-grammarly="false" style="height: 150px;" required><?php echo "$edit[dmg_analysis]" ?></textarea>
                                        <label for="type">Analisa Kerusakan</label>
                                    </div>
                                </div>

                                <!-- Barang Yang Di Ganti -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="user" name="itm_replacement" value="<?php echo "$edit[itm_replacement]" ?>" placeholder="Masukkan" onkeyup="myUser()" required>
                                        <label for="user">Barang Yang Di Ganti</label>
                                    </div>
                                </div>

                                <!-- Tanggal -->
                                <div class="col-12">
                                    <div id="datetimepicker2" class="form-floating mb-3">
                                        <input type="datetime-local" data-format="dd/MM/yyyy hh:mm:ss" class="form-control" id="tanggalbeli" name="date" value="<?php echo date("Y-m-d\TH:i:s", time()); ?>" required>
                                        <label for="tanggalbeli">Date</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="user" name="author" value="<?php echo "$edit[author]" ?>" placeholder="Masukkan" onkeyup="myUser()" readonly>
                                        <label for="user">Author</label>
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


                </form><!-- End General Form Elements -->


            </div>
            </div>

            </div>
            </div>
        </section>

    </main><!-- End #main -->
    <?php require 'footer.php'; ?>