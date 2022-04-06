<?php
@$id=$_GET['id'];

$sql  = "select * from tabel_user where id_user=$id";
$show =$db->query($sql);
$hasil=mysqli_fetch_assoc($show);

$id_peg =  $hasil['id_petugas'];

$pegawai = "select id_pegawai, Nama_pegawai from tabel_pegawai";
  $showpegawai = $db->query($pegawai);

?>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data User</h4>
                        <br>
                        <form action="model/user/prosesupdateuser.php" method="POST">
                        <input type="hidden" name="id_user" id="id_user" value="<?php echo $hasil['id_user']?>">
                            <table class="table">
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
                                   
                                    </td>
                                </tr>
                                <tr>
                                    <td>username</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control"  maxlength="50" name="username" 
                                            id="id_user"  value="<?php echo $hasil ['username']?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>password</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="password"
                                            id="id_user" value="<?php echo $hasil ['password']?>">
                                     </td>
                                </tr>
                                <tr>
                                    <td>dibuat pada</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="dibuatpada"
                                            id="id_user" value="<?php echo $hasil ['dibuatpada']?>">
                                     </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-primary" value="Update">
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