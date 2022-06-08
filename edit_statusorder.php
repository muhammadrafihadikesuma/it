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
            <h1>EDIT STATUS ORDER LOKAL</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="data_order.php">Data Order Lokal</a></li>
                    <li class="breadcrumb-item active">Edit Status Order Lokal</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Status Order Lokal &nbsp; <i class="bi bi-person-fill"></i> <?php echo "$edit[nama_barang]" ?> | <?php echo "$edit[date]" ?> </h5>

                            <!-- General Form Elements -->
                            <form action="api_editstatusorder.php" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id_order" value="<?php echo "$edit[id_order]" ?>">

                                <!-- Status Order -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="floatingOrder" name="status_order" required>
                                            <option selected disabled value>- Pilih Status Order</option>
                                            <option <?php if ($edit['status_order'] == 'waiting') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="waiting">Waiting</option>
                                            
                                            <option <?php if ($edit['status_order'] == 'yes') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="yes">Yes</option>

                                            <option <?php if ($edit['status_order'] == 'no') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="no">No</option>
                                        </select>
                                        <label for="floatingOrder">Status Order</label>
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