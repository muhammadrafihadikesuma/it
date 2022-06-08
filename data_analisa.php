<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>


<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>DATA ANALISA</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item active">Data Analisa</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- TABLE -->
        <section class="section">
            <div class="card shadow mb-4">
                <div class="col-lg-12">
                    <div class="card-body">
                        <h5 class="card-title">Data Analisa</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pengirim</th>
                                            <th>Nama Penerima</th>
                                            <th>Tanggal Terima</th>
                                            <th>Jabatan & Estate Pengirim</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah Unit</th>
                                            <th>Kerusakan</th>
                                            <th>Divisi</th>
                                            <th>Analisa Kerusakan</th>
                                            <th>Barang Yang Di Ganti</th>
                                            <th>Tanggal Analisa</th>
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
                                            $query = mysqli_query($koneksi, "SELECT * FROM analysis LEFT JOIN receipt ON analysis.id_receipt = receipt.id_receipt ORDER BY id_analysis DESC");
                                        } else {
                                            # code...
                                            $query = mysqli_query($koneksi, "SELECT * FROM analysis LEFT JOIN receipt ON analysis.id_receipt = receipt.id_receipt WHERE analysis.id_author='$id' ORDER BY id_analysis DESC");

                                        }
                                        
                                        while ($read = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $number++; ?></td>
                                                <td><?php echo $read['nama_pengirim']; ?></td>
                                                <td><?php echo $read['nama_penerima']; ?></td>
                                                <td><?php echo $read['date']; ?></td>
                                                <td><?php echo $read['jabatan']; ?></td>
                                                <td><?php echo $read['nama_barang']; ?></td>
                                                <td><?php echo $read['jumlah_unit']; ?></td>
                                                <td><?php echo $read['kerusakan']; ?></td>
                                                <td><?php echo $read['divisi']; ?></td>
                                                <td><?php echo $read['dmg_analysis']; ?></td>
                                                <td><?php echo $read['itm_replacement']; ?></td>
                                                <td><?php echo $read['date_an']; ?></td>
                                                <td><?php echo $read['author']; ?></td>
                                                <td style="width: 100px; text-align:center;">
                                                    <a href="edit_analisa.php?id=<?= $read['id_analysis'] ?>"><i class="bi bi-pencil-square btn btn-success btn-sm"></i></a>
                                                    <?php if ($_SESSION['level'] == 'admin') { ?>
                                                        <a href="hapus_analisa.php?id=<?= $read['id_analysis'] ?>" onClick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="bi bi-trash btn btn-danger btn-sm"></i></a>
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