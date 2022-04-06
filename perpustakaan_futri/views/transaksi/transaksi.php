
                <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Transaksi
        <a href="beranda.php?page=transaksi&aksi=add">
        <button class="btn btn-primary">Tambah Data</button>
        </a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id transaksi</th>
                        <th>tanggal transaksi</th>
                        <th>id anggota</th>
                        <th>id pegawai</th>
                        <th>id buku</th>
                        <th>quantity</th>
                        <th>jenis transaksi</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql  = "select * from tabel_transaksi";
                        $show = $db->query($sql);

                        foreach($show as $agt):
                    ?>
                    <tr>
                        <td><?php echo $agt['id_transaksi']?></td>
                        <td><?php echo $agt['tanggal_transaksi']?></td>
                        <td><?php echo $agt['id_anggota']?></td>
                        <td><?php echo $agt['id_pegawai']?></td>
                        <td><?php echo $agt['id_buku']?></td>
                        <td><?php echo $agt['quantity']?></td>
                        <td><?php echo $agt['jenis_transaksi']?></td>
                        <td>
                                <a href="beranda.php?page=transaksi&aksi=edit&id=<?php echo $agt['id_transaksi']?>"
                                    class="btn btn-primary btn-circle">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="model/transaski/prosesdeletetransaksi.php?id=<?php echo $agt['id_transaksi']?>"
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