<?php
require 'config.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM users WHERE
							id='$id'");
$edit = mysqli_fetch_array($query);

?>

<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>EDIT PASSWORD USER</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="data_user.php">Data User</a></li>
                    <li class="breadcrumb-item active">Edit Password User</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Password User &nbsp; <i class="bi bi-person-fill"></i> <?php echo "$edit[nama]"?> </h5>
                            <!-- General Form Elements -->
                            <form action="api_editpassword.php" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo "$edit[id]"?>">

                                <!-- PASSWORD -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="3" name="password" value="<?php echo "$edit[password]"?>" placeholder="Masukkan" onkeyup="my3()" required>
                                        <label for="3">Password</label>
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