<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>


<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>DATA LOGBOOK</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="input_logbook.php">Input LogBook</a></li>
                    <li class="breadcrumb-item active">Data LogBook</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- TABLE -->
        <section class="section">
            <div class="card shadow mb-4">
                <div class="col-lg-12">
                    <div class="card-body">
                        <h5 class="card-title">Data LogBook</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <?php if ($_SESSION['level'] == 'admin') { ?>
                                                <th>ID Author</th>
                                            <?php } ?>
                                            <th>Areal</th>
                                            <th>Date & Time</th>
                                            <th>Kategori</th>
                                            <th>User</th>
                                            <th>Kasus</th>
                                            <th>Penyelesaian</th>
                                            <th>Keterangan</th>
                                            <th>Author</th>
                                            <th>Aksi</th>
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
                                        $id = $_SESSION['id'];
                                        if ($_SESSION['level'] == 'admin') {
                                            # code...
                                            $query = mysqli_query($koneksi, " SELECT * FROM logbook ORDER BY id_logbook DESC");
                                        } else {
                                            # code...
                                            $query = mysqli_query($koneksi, " SELECT * FROM logbook WHERE id_author= '$id' ORDER BY id_logbook DESC");
                                        }
                                        while ($read = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $number++; ?></td>
                                                <?php if ($_SESSION['level'] == 'admin') { ?>
                                                    <td><?php echo $read['id_author']; ?></td>
                                                <?php } ?>
                                                <td><?php echo $read['areal']; ?></td>
                                                <td><?php echo $read['date']; ?></td>
                                                <td><?php echo $read['kategori']; ?></td>
                                                <td><?php echo $read['user']; ?></td>
                                                <td><?php echo $read['kasus']; ?></td>
                                                <td><?php echo $read['penyelesaian']; ?></td>
                                                <td><?php echo $read['keterangan']; ?></td>
                                                <td><?php echo $read['author']; ?></td>
                                                <td style="width: 100px; text-align:center;">
                                                    <a href="edit_logbook.php?id=<?= $read['id_logbook'] ?>"><i class="bi bi-pencil-square btn btn-success btn-sm"></i></a>
                                                    <?php if ($_SESSION['level'] == 'admin') { ?>
                                                        <a href="hapus_logbook.php?id=<?= $read['id_logbook'] ?>" onClick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="bi bi-trash btn btn-danger btn-sm"></i></a>
                                                    <?php } ?>
                                                </td>
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