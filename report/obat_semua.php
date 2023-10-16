<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua obat</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Aplikasi Stok Obat RSUD dr. H. Soemarno Sosroatmodjo Kapuas</h2>
                        <h4>Jl. Tambun Bungai No 16</h4>
                        <hr>
                        <h3>Data Seluruh obat</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th><th width="18%">Kode</th><th>Nama obat</th><th width="15%"><center>Harga</center></th><th><center>Stok</center></th><th><center>Exp Date</center></th><th>Aksi</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_obat";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                  <td><?= $nomor ?></td>
                                  <td><?= $data['kode'] ?></td>
                                  <td><?= $data['nama_obat'] ?></td>
                                  <td><?= $data['harga'] ?></td>
                                  <td><?= $data['stok'] ?></td>
                                  <td><?= $data['exp_date'] ?></td>
                                <td>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Santi Setiawati, Amd., Farm.<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>