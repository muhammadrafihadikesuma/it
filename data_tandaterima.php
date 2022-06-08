<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>


<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>DATA TANDA TERIMA</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="input_tandaterima.php">Input Tanda Terima</a></li>
                    <li class="breadcrumb-item active">Data Tanda Terima</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- TABLE -->
        <section class="section">
            <div class="card shadow mb-4">
                <div class="col-lg-12">
                    <div class="card-body">
                        <h5 class="card-title">Data Tanda Terima</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <?php if ($_SESSION['level'] == 'admin') { ?>
                                                <th>ID Author</th>
                                            <?php } ?>
                                            <th>Nama Pengirim</th>
                                            <th>Nama Penerima</th>
                                            <th>Tanggal</th>
                                            <th>Jabatan & Estate Pengirim</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah Unit</th>
                                            <th>Kerusakan</th>
                                            <th>Status</th>
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
                                        $id = $_SESSION['id'];
                                        $number = 1;

                                        if ($_SESSION['level'] == 'admin') {
                                            # code...
                                            $query = mysqli_query($koneksi, " SELECT * FROM receipt ORDER BY id_receipt DESC");
                                        } else {
                                            # code...
                                            $query = mysqli_query($koneksi, " SELECT * FROM receipt WHERE id_author= '$id' ORDER BY id_receipt DESC");
                                        }


                                        while ($read = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $number++; ?></td>
                                                <?php if ($_SESSION['level'] == 'admin') { ?>
                                                    <td><?php echo $read['id_author']; ?></td>
                                                <?php } ?>
                                                <td><?php echo $read['nama_pengirim']; ?></td>
                                                <td><?php echo $read['nama_penerima']; ?></td>
                                                <td><?php echo $read['date']; ?></td>
                                                <td><?php echo $read['jabatan']; ?></td>
                                                <td><?php echo $read['nama_barang']; ?></td>
                                                <td><?php echo $read['jumlah_unit']; ?></td>
                                                <td><?php echo $read['kerusakan']; ?></td>
                                                <td>
                                                    <?php if ($read['status'] == 'analisa') { ?>
                                                        <a href="analisa.php?id=<?= $read['id_receipt'] ?>">
                                                            <button class="btn btn-outline-danger btn-sm">ANALISA</button>
                                                        </a>
                                                    <?php
                                                    } else {
                                                        # code...
                                                        echo '<i class="btn btn-outline-success btn-sm" disabled>SELESAI</i>';
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php echo $read['author']; ?></td>

                                                <td style="width: 100px; text-align:center;">

                                                    <?php if ($read['status'] == 'analisa') { ?>
                                                        <a href="analisa.php?id=<?= $read['id_receipt'] ?>">
                                                            <a href="edit_terima.php?id=<?= $read['id_receipt'] ?>"><button class="btn btn-success btn-sm"> EDIT</button></a>
                                                        </a>
                                                    <?php
                                                    } else {
                                                        # code...
                                                        echo '<i class="btn btn-outline-success btn-sm" disabled>SELESAI</i>';
                                                    }
                                                    ?>



                                                    <?php if ($_SESSION['level'] == 'admin') { ?>
                                                        <a href="hapus_terima.php?id=<?= $read['id_receipt'] ?>" onClick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="bi bi-trash btn btn-danger btn-sm"></i></a>
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