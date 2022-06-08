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
                            <form action="api_editpo.php" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id_order" value="<?php echo "$edit[id_order]" ?>">

                                <!-- Status Order -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="floatingOrder" name="status_po" required>
                                            <option selected disabled value>- Pilih PO</option>
                                            <option <?php if ($edit['status_po'] == 'pending') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="purchassing">Pending</option>

                                            <option <?php if ($edit['status_po'] == 'finish') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="finish">Finish</option>

                                            <option <?php if ($edit['status_po'] == 'cancel') {
                                                        # code...
                                                        echo 'selected';
                                                    } ?> value="cancel">Di Tolak</option>
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