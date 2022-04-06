<?php
    $user = "select id_pegawai, Nama_pegawai from tabel_pegawai";
    $showuser = $db->query($user);

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data User </h4>
                        <br>
                        <form action="model/user/prosesadduser.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td>id pegawai</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="5" name="id_pegawai"
                                            id="id_user">
                                    </td>
                                </tr>
                                <tr>
                                    <td>username</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="username"
                                            id="id_user">
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>password</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control"  maxlength="50" name="password" 
                                            id="user">
                                    </td>
                                </tr>
                                <tr>
                                    <td>level</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="1" name="level"
                                            id="id_user"></td>
                                </tr>
                                <tr>
                                    <td>dibuat pada</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="dibuatpada"
                                            id="id_user">
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