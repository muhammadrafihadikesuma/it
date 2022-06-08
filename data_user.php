<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>


<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>DATA USER</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="input_user.php">Input User</a></li>
                    <li class="breadcrumb-item active">Data User</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- TABLE -->
        <section class="section">
            <div class="card shadow mb-4">
                <div class="col-lg-12">
                    <div class="card-body">
                        <h5 class="card-title">Data USER</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Jabatan</th>
                                            <th>Level</th>
                                            <?php if ($_SESSION['level'] == 'admin') { ?>

                                                <th>Aksi</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr> 
                                            <th>No</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <?php
                                        require 'config.php';
                                        $number = 1;
                                        $query = mysqli_query($koneksi, " SELECT * FROM users ORDER BY id DESC");
                                        while ($read = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $number++; ?></td>
                                                <td><?php echo $read['nama']; ?></td>
                                                <td><?php echo $read['username']; ?></td>
                                                <td><a href="edit_password.php?id=<?= $read['id'] ?>"><?php echo $read['password']; ?> </a></td>
                                                <td><?php echo $read['jabatan']; ?></td>
                                                <td><?php echo $read['level']; ?></td>
                                                <?php if ($_SESSION['level'] == 'admin') { ?>
                                                    <td style="width: 100px; text-align:center;">
                                                        <a href="edit_user.php?id=<?= $read['id'] ?>"><i class="bi bi-pencil-square btn btn-success btn-sm"></i></a>

                                                        <a href="hapus_user.php?id=<?= $read['id'] ?>" onClick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="bi bi-trash btn btn-danger btn-sm"></i></a>
                                                    </td>
                                                <?php } ?>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->

                            </div>
                        </div>
                    </div>
                </div>
        </section>
        </div>
        </div>
        </section>

    </main>

    <?php require 'footer.php'; ?>