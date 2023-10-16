<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data obat </title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_obat WHERE kode='" . $_GET ['kode'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Aplikasi Stok Obat RSUD dr. H. Soemarno Sosroatmodjo Kapuas</h2>
                        <h4>Jl. Tambun Bungai No 16</h4>>
                        <hr>
                        <h3>Data obat</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
                               
								<tr>
                                    <td>Kode</td> <td><?= $data['kode'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama obat</td> <td><?= $data['nama_obat'] ?></td>
                                </tr>
								<tr>
                                    <td>Harga</td> <td><?= $data['harga'] ?></td>
                                </tr>
								<tr>
                                    <td>Stok</td> <td><?= $data['stok'] ?></td>
                                </tr>
                                <tr>
                                    <td>Exp Date</td> <td><?= $data['exp_date'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Santi Setiawati, Amd.,Farm.<strong></u><br>

									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>