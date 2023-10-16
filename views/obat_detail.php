<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Obat</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_obat WHERE kode ='" . $_GET ['kode'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
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
                            <td>Stok </td> <td><?= $data['stok'] ?></td>
                        </tr>
                        <tr>
                            <td>Exp Date</td> <td><?= $data['exp_date'] ?></td>
                        </tr>
                    </table>
                
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=obat&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

