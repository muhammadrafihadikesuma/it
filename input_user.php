<!-- ======= Header ======= -->
<?php require 'header.php'; ?>
<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php require 'sidebar.php'; ?>
<!-- End Sidebar-->

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>INPUT USER</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="data_user.php">Data User</a></li>
                    <li class="breadcrumb-item active">Input User</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Input User</h5>

                            <!-- General Form Elements -->
                            <form action="api_inputuser.php" method="POST">

                                <input type="hidden" class="form-control" id="id" name="id">

                                <!-- NAMA -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="1" name="nama" placeholder="Masukkan" onkeyup="my1()" required>
                                        <label for="1">Nama</label>
                                    </div>
                                </div>

                                <!-- USERNAME -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="2" name="username" placeholder="Masukkan" onkeyup="my2()" required>
                                        <label for="2">Username</label>
                                    </div>
                                </div>

                                <!-- PASSWORD -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="3" name="password" placeholder="Masukkan" onkeyup="my3()" required>
                                        <label for="3">Password</label>
                                    </div>
                                </div>

                                <!-- JABATAN -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="3" name="jabatan" placeholder="Masukkan" onkeyup="my3()" required>
                                        <label for="3">Jabatan</label>
                                    </div>
                                </div>

                                <!-- LEVEL -->
								<div class="col-12">
									<div class="form-floating mb-3">
										<select class="form-select" aria-label="Default select example" id="floatingStatus" name="level" required>
											<option selected disabled value>Pilih Level</option>
											<option value="admin">Admin</option>
											<option value="staff">Staff</option>
											<option value="user">User</option>
										</select>
										<label for="floatingStatus">Level</label>
										<div class="invalid-tooltip">
											Status Pasien Tidak Boleh Kosong!
										</div>
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