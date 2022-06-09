<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>


<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>DATA KEGIATAN HARIAN</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="input_harian.php">Input Kegiatan Harian</a></li>
                    <li class="breadcrumb-item active">Data Kegiatan Harian</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- TABLE -->
        <section class="section">
            <div class="card shadow mb-4">
                <div class="col-lg-12">
                    <div class="card-body">
                        <h5 class="card-title">Data Kegiatan Harian</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Tanggal</th>
                                            <th style="text-align: center;">Waktu Pelaksaan</th>
                                            <th style="text-align: center;">Kegiatan</th>
                                            <th style="text-align: center;">Status</th>
                                            <th style="text-align: center;">Author</th>
                                            <th style="text-align: center;">Aksi</th>
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
                                            $query = mysqli_query($koneksi, " SELECT * FROM daily ORDER BY id_daily DESC");
                                        } else {
                                            $query = mysqli_query($koneksi, " SELECT * FROM daily WHERE id_author='$id' ORDER BY id_daily DESC");
                                        }

                                        while ($read = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td style="text-align: center;"><?php echo $number++; ?></td>
                                                <td style="text-align: center;"><?php echo $read['date']; ?></td>
                                                <td style="text-align: center;"><?php echo $read['time']; ?></td>
                                                <td style="text-align: center;"><?php echo $read['kegiatan']; ?></td>


                                                <td style="text-align: center;">
                                                    <?php if ($read['status'] == 'waiting') { ?>
                                                        <a href="edit_statusharian.php?id=<?= $read['id_daily'] ?>">
                                                            <button class="btn btn-warning btn-sm">Menunggu Antrian Pengerjaan...</button>
                                                        <?php
                                                    } elseif ($read['status'] == 'work') { ?>
                                                            <a href="edit_statusharian.php?id=<?= $read['id_daily'] ?>">
                                                                <i class="btn btn-outline-primary btn-sm">Dalam Pengerjaan...</i>
                                                            <?php
                                                        } else {
                                                            # code...
                                                            echo '<button class="btn btn-outline-success btn-sm">Selesai</button>';
                                                        }
                                                            ?>
                                                            </a>
                                                </td>

                                                <td style="text-align: center;"><?php echo $read['author']; ?></td>

                                                <td style="width: 100px; text-align:center;">
                                                    <!-- <a href="edit_harian.php?id=<?= $read['id_daily'] ?>"><i class="bi bi-pencil-square btn btn-success btn-sm"></i></a> -->

                                                    <a href="hapus_harian.php?id=<?= $read['id_daily'] ?>" onClick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="bi bi-trash btn btn-danger btn-sm"></i></a>
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