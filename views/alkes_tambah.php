<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Alkes</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <div class="col-sm-2 col-xs-9">
                            </div>
                            </div>
                        
                        <div class="form-group">
                            <label for="ID" class="col-sm-3 control-label">ID Alkes</label>
                            <div class="col-sm-9">
                                <input type="text" name="id" class="form-control" id="inputEmail3" placeholder="Inputkan ID kapsul" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nama_alat" class="col-sm-3 control-label">Nama Alkes</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_alat" class="form-control" id="inputEmail3" placeholder="Inputkan Nama kapsul" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control" id="inputEmail3" placeholder="Inputkan Harga" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="stok_alat" class="col-sm-3 control-label">Stok Alat</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok_alat" class="form-control" id="inputEmail3" placeholder="Inputkan Stok" required>
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span>Simpan Data</button>
                            </div>
                        </div>
                    </form>

                </div>
                </div>
                <div class="panel-footer">
                    <a href="?page=alkes&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Alkes
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $kode=$_POST['id'];
    $nama_alat=$_POST['nama_alat'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];
    //buat sql
    $sql="INSERT INTO tbl_kapsul VALUES ('$kode','$nama_alat','$harga','$stok')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan kapsul  Error");
    if ($query){
        echo "<script>window.location.assign('?page=alkes&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
