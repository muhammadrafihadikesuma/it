<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>


<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>DATA ORDER LOKAL</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="input_order.php">Input Order Lokal</a></li>
                    <li class="breadcrumb-item active">Data Order Lokal</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- TABLE -->
        <section class="section">
            <div class="card shadow mb-4">
                <div class="col-lg-12">
                    <div class="card-body">
                        <h5 class="card-title">Data Order Lokal</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nama Barang</th>
                                            <th>Satuan</th>
                                            <th>Divisi</th>
                                            <th>User</th>
                                            <th>Remark</th>
                                            <th>Status Order Lokal</th>
                                            <th>Status CERF</th>
                                            <th>Status PO</th>
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
                                            $query = mysqli_query($koneksi, " SELECT * FROM order_local ORDER BY id_order DESC");
                                        } else {
                                            $query = mysqli_query($koneksi, " SELECT * FROM order_local WHERE id_author='$id' ORDER BY id_order DESC");
                                        }

                                        while ($read = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $number++; ?></td>
                                                <td><?php echo $read['date']; ?></td>
                                                <td><?php echo $read['nama_barang']; ?></td>
                                                <td><?php echo $read['satuan']; ?></td>
                                                <td><?php echo $read['divisi']; ?></td>
                                                <td><?php echo $read['user']; ?></td>
                                                <td><?php echo $read['remark']; ?></td>

                                                <td style="text-align: center;">
                                                    <?php if ($read['status_order'] == 'waiting') { ?>
                                                        <a href="edit_statusorder.php?id=<?= $read['id_order'] ?>">
                                                            <button class="btn btn-outline-warning btn-sm">Menunggu...</button>
                                                        <?php
                                                    } elseif ($read['status_order'] == 'no') {
                                                        # code...
                                                        echo '<button class="btn btn-outline-danger btn-sm">Ditolak</button>';
                                                    } else {
                                                        # code...
                                                        echo '<i class="btn btn-outline-success btn-sm">Di Setujui</i>';
                                                    }
                                                        ?>
                                                        </a>
                                                </td>

                                                <td style="text-align: center;">
                                                    <?php if ($read['status_cerf'] == 'no') { ?>
                                                        <a href="edit_cerf.php?id=<?= $read['id_order'] ?>">
                                                            <button class="btn btn-outline-warning btn-sm">Menunggu...</button>
                                                        <?php
                                                    } elseif ($read['status_cerf'] == 'yes') {
                                                        # code...
                                                        echo '<i class="btn btn-outline-success btn-sm">Sudah Diapprove</i>';
                                                    } else {
                                                        # code...
                                                        echo '<button class="btn btn-outline-danger btn-sm">Ditolak</button>';
                                                    }
                                                        ?>
                                                        </a>

                                                </td>

                                                <td style="text-align: center;">
                                                    <?php if ($read['status_po'] == 'pending') {?>
                                                        <a href="edit_statuspo.php?id=<?= $read['id_order'] ?>">
                                                            <button class="btn btn-outline-warning btn-sm">Pending...</button>
                                                        <?php
                                                        } elseif ($read['status_po'] == 'finish') {
                                                            # code...
                                                            echo '<i class="btn btn-outline-success btn-sm">Selesai</i>';
                                                        } else {
                                                            # code...
                                                            echo '<button class="btn btn-outline-danger btn-sm">Ditolak</button>';
                                                        }
                                                        ?>
                                                    </a>
                                                </td>

                                                <td><?php echo $read['author']; ?></td>

                                                <td style="width: 100px; text-align:center;">
                                                    <a href="edit_order.php?id=<?= $read['id_order'] ?>"><i class="bi bi-pencil-square btn btn-success btn-sm"></i></a>

                                                    <a href="hapus_order.php?id=<?= $read['id_order'] ?>" onClick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="bi bi-trash btn btn-danger btn-sm"></i></a>
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