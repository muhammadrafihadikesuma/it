<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>


<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>DATA MASTER</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="input_datamaster.php">Input Master</a></li>
                    <li class="breadcrumb-item"><a href="kode_inventaris.php">Kode Inventaris</a></li>
                    <li class="breadcrumb-item active">Data Master</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- TABLE -->
        <section class="section">
            <div class="card shadow mb-4">
                <div class="col-lg-12">
                    <div class="card-body">
                        <h5 class="card-title">Data Master</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Divisi</th>
                                            <th>Type</th>
                                            <th>Merk</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>User</th>
                                            <th>MainBoard</th>
                                            <th>Processor</th>
                                            <th>RAM</th>
                                            <th>Harddisk / SSD</th>
                                            <th>Casing</th>
                                            <th>Windows Edition</th>
                                            <th>Windows Version</th>
                                            <th>Licenses PC</th>
                                            <th>Office</th>
                                            <th>Licenses Office</th>
                                            <th>Spesifikasi Lainnya</th>
                                            <th>Status</th>
                                            <th>Age</th>
                                            <th>UPS</th>
                                            <th>Printer</th>
                                            <th>Kode Inventaris</th>
                                            <?php if ($_SESSION['level']  == 'admin') { ?>
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
                                        $query = mysqli_query($koneksi, " SELECT * FROM masters ORDER BY id_master DESC");
                                        while ($read = mysqli_fetch_array($query)) {
                                            $tgl = str_replace('-', '', $read['tgl_beli']);
                                            $divisi = $read['divisi'];

                                            $inventaris = 'PWS' . '' . $tgl . '' . $divisi;
                                        ?>
                                            <tr>
                                                <td><?php echo $number++; ?></td>
                                                <td><?php echo $read['divisi']; ?></td>
                                                <td><?php echo $read['type']; ?></td>
                                                <td><?php echo $read['merk']; ?></td>
                                                <td><?php echo $read['tgl_beli']; ?></td>
                                                <td><?php echo $read['user']; ?></td>
                                                <td><?php echo $read['mainboard']; ?></td>
                                                <td><?php echo $read['processor']; ?></td>
                                                <td><?php echo $read['ram']; ?></td>
                                                <td><?php echo $read['harddisk']; ?></td>
                                                <td><?php echo $read['casing']; ?></td>
                                                <td><?php echo $read['wdw_edition']; ?></td>
                                                <td><?php echo $read['wdw_version']; ?></td>
                                                <td><?php echo $read['licenses_pc']; ?></td>
                                                <td><?php echo $read['office']; ?></td>
                                                <td><?php echo $read['licenses_office']; ?></td>
                                                <td><?php echo $read['other_spec']; ?></td>
                                                <td><?php echo $read['status']; ?></td>
                                                <td><?php echo $read['age']; ?></td>
                                                <td><?php echo $read['ups']; ?></td>
                                                <td><?php echo $read['printer']; ?></td>
                                                <td><?php echo $inventaris; ?></td>
                                                <?php if ($_SESSION['level']  == 'admin') { ?>
                                                    <td style="width: 100px; text-align:center;">
                                                        <a href="edit_master.php?id=<?= $read['id_master'] ?>"><i class="bi bi-pencil-square btn btn-success btn-sm"></i></a>
                                                        <a href="hapus_master.php?id=<?= $read['id_master'] ?>" onClick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="bi bi-trash btn btn-danger btn-sm"></i></a>
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