
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data User
        <a href="beranda.php?page=anggota&aksi=add">
        <button class="btn btn-primary">Tambah Data</button>
        </a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id user</th>
                        <th>id pegawai</th>
                        <th>username</th>
                        <th>password</th>
                        <th>level</th>
                        <th>dibuatpada</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                        $sql  = "select * from tabel_user";
                        $show = $db->query($sql);

                        foreach($show as $agt):
                    ?>
                    <tr>
                        <td><?php echo $agt['id_user']?></td>
                        <td><?php echo $agt['id_pegawai']?></td>
                        <td><?php echo $agt['username']?></td>
                        <td><?php echo $agt['password']?></td>
                        <td><?php echo $agt['level']?></td>
                        <td><?php echo $agt['dibuatpada']?></td> 
                        <td>
                                <a href="beranda.php?page=user&aksi=edit&id=<?php echo $agt['id_user']?>"
                                    class="btn btn-primary btn-circle">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="model/user/prosesdeletepegawai.php?id=<?php echo $agt['id_user']?>"
                                    class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a>
                           </td>
                        
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>