<?php
@$id=$_GET['id'];

$sql  = "select * from tabel_pegawai where id_pegawai=$id";
$show =$db->query($sql);
$hasil=mysqli_fetch_assoc($show);

$jk =  $hasil['jenis_kelamin'];
?>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data Transaksi</h4>
                        <br>
                        <form action="model/transaksi/prosesupdatetransaksi.php" method="POST">
                        <input type="hidden" name="id_transaksi" id="id_transaksi" value="<?php echo $hasil['id_transaksi']?>">
                            <table class="table">
                                <tr>
                                    <td>tanggal transaksi</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="tanggal_transaksi" 
                                    id="tanggal_transaksi" value="<?php echo $hasil['tanggal_transaksi']?>">
                                   
                                    </td>
                                </tr>
                                <tr>
                                    <td>nama anggota</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="id_anggota" id="id_anggota">
                                        <?php foreach ($showanggota as $agt)   :
                                            $id_agt =$agt['id_anggota'];
                                        ?>
                                             <option value="<?php echo $agt['id_anggota']?>"
                                             <?php
                                                 if ($id_ang == $id_agt) {echo "selected"; }
                                             ?> >
                                                 <?php echo $agt['nama_anggota']?></option>
                                        <?php endforeach;?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>nama pegawai</td>
                                    <td>:</td>
                                    <td><select class="form-control" name="id_pegawai" id="id_pegawai">
                                    <?php foreach ($showpegawai as $pgw)   :
                                            $id_pgw =$pgw['id_pegawai'];
                                        ?>
                                             <option value="<?php echo $pgw['id_pegawai']?>"
                                             <?php
                                                 if ($id_peg== $id_pgw) {echo "selected"; }
                                             ?> >
                                                 <?php echo $agt['Nama_pegawai']?></option>
                                        <?php endforeach;?>
                                         </select>
                                         </td>
                                </tr>
                                <tr>
                                    <td>nama buku</td>
                                    <td>:</td>
                                    <td><select class="form-control" name="id_buku" id="id_buku">
                                    <?php foreach ($showbuku as $bk)   :
                                            $id_bk =$bk['id_buku'];
                                        ?>
                                             <option value="<?php echo $agt['id_buku']?>"
                                             <?php
                                                 if ($id_bk== $id_bk) {echo "selected"; }
                                             ?> >
                                                 <?php echo $bk['nama_bk']?></option>
                                        <?php endforeach;?>
                                         </select>
                                   </td>
                                </tr>
                                <tr>
                                    <td>quantity</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="2" name="quantity"
                                     id="id_transaksi"  value="<?php echo $hasil['quantity']?>">
                                     </td>
                                </tr>
                                <tr>
                                    <td>jenis transaksi</td>
                                    <td>:</td>
                                    <td>
                                      <select class="form-control" name="jenis_transaksi" id="id_transaksi" >
                                     <option value="pinjam" >peminjaman</option>
                                     <option value="kembali" >pengembalian</option>
                                     </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-primary" value="Simpan">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>