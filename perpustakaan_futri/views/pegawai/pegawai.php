
                <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pegawai
        <a href="beranda.php?page=pegawai&aksi=add">
        <button class="btn btn-primary">Tambah Data</button>
        </a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id pegawai</th>
                        <th>nama pegawai</th>
                        <th>jenis kelamin</th>
                        <th>alamat</th>
                        <th>no hp</th>
                        <th>jabatan</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $sql  = "select * from  tabel_pegawai";
                        $show = $db->query($sql);

                        foreach($show as $agt):
                    ?>
                    <tr>
                        <td><?php echo $agt['id_pegawai']?></td>
                        <td><?php echo $agt['Nama_pegawai']?></td>
                        <td><?php echo $agt['jenis_kelamin']?></td>
                        <td><?php echo $agt['alamat']?></td>
                        <td><?php echo $agt['no_hp']?></td>
                        <td><?php echo $agt['jabatan']?></td>
                        <td>
                                <a href="beranda.php?page=pegawai&aksi=edit&id=<?php echo $agt['id_pegawai']?>"
                                    class="btn btn-primary btn-circle">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="model/pegawai/prosesdeletepegawai.php?id=<?php echo $agt['id_pegawai']?>"
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