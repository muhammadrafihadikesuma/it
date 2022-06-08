<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>


<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>KODE INVENTARIS</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="tables_master.php">Data Master</a></li>
                    <li class="breadcrumb-item active">Kode Inventaris</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- TABLE -->
        <section class="section">
            <div class="card shadow mb-4">
                <div class="col-lg-12">
                    <div class="card-body">
                        <h5 class="card-title">Kode Inventaris</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Kode Inventaris</th>
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
                                                <td style="text-align: center; size: 10px;"><?php echo $number++; ?></td>
                                                <td style="text-align: center;"><?php echo $inventaris; ?></td>
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