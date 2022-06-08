<?php
require 'config.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM order_local WHERE
							id_order='$id'");
$edit = mysqli_fetch_array($query);

?>

<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>EDIT ORDER LOKAL</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="data_order.php">Data Order Lokal</a></li>
                    <li class="breadcrumb-item active">Edit Order Lokal</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Order Lokal &nbsp; <i class="bi bi-person-fill"></i> <?php echo "$edit[divisi]" ?> | <?php echo "$edit[date]" ?> </h5>

                            <!-- General Form Elements -->
                            <form action="api_editorder.php" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id_order" value="<?php echo "$edit[id_order]" ?>">

                                <!-- Tanggal -->
                                <div class="col-12">
                                    <div id="datetimepicker2" class="form-floating mb-3">
                                        <input type="date" name="date" value="<?php echo "$edit[date]" ?>" data-format="dd/MM/yyyy hh:mm:ss" class="form-control" id="tanggalbeli" required>
                                        <label for="tanggalbeli">Tanggal</label>
                                    </div>
                                </div>

                                <!-- Nama Barang -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="nama_barang" value="<?php echo "$edit[nama_barang]" ?>" placeholder="Masukkan" id="1" onkeyup="my1()" required>
                                        <label for="divisi">Nama Barang</label>
                                    </div>
                                </div>

                                <!-- Satuan -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="satuan" value="<?php echo "$edit[satuan]" ?>" placeholder="Masukkan" id="2" onkeyup="my2()" required>
                                        <label for="type">Satuan</label>
                                    </div>
                                </div>

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

                                <!-- User -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" value="<?php echo "$edit[user]" ?>" name="user" placeholder="Masukkan" id="4" onkeyup="my4()" required>
                                        <label for="user">User</label>
                                    </div>
                                </div>

                                <!-- Remark -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" value="<?php echo "$edit[remark]" ?>" name="remark" placeholder="Masukkan" id="5" onkeyup="my5()" required>
                                        <label for="user">Remark</label>
                                    </div>
                                </div>

                                <!-- Author -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="user" name="author" value="<?php echo "$edit[author]" ?>" placeholder="Masukkan" onkeyup="my8()" readonly>
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
            </div>
        </section>

    </main><!-- End #main -->
    <?php require 'footer.php'; ?>