<?php
$kode=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_alatkesehatan WHERE id='$kode'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Alkes</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="id" class="col-sm-3 control-label">id</label>
                             <div class="col-sm-9">
								<input type="text" name="id" value="<?=$data['id']?>"class="form-control" id="inputEmail3" placeholder="id" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_alat" class="col-sm-3 control-label">Nama Alkes</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_alat" value="<?=$data['nama_alat']?>"class="form-control" id="inputEmail3" placeholder="Nama alat">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" value="<?=$data['harga']?>"class="form-control" id="inputEmail3" placeholder="Harga">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="stok_alat" class="col-sm-3 control-label">Stok</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok_alat" value="<?=$data['stok_alat']?>"class="form-control" id="inputEmail3" placeholder="stok_alat">
                            </div>
                        </div>
						
						 <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Alkes</button>
                            </div>
                        </div>
                    </form>


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
    $kode=$_POST['id'];
    $nama_alat =$_POST['nama_alat'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok_alat'];
    //buat sql
    $sql="UPDATE tbl_alatkesehatan   SET id = '$kode', nama_alat='$nama_alat', harga='$harga', stok_alat='$stok', WHERE id='$kode'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=alkes&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



