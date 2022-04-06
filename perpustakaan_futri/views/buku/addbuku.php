<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data Buku</h4>
                        <br>
                        <form action="model/buku/prosesaddbuku.php" method="POST">
                            <table class="table">
                            <tr>
                                    <td>isbn</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="isbn" id="isbn">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Buku</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="nama_buku" id="nama_buku">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penulis</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="penulis" id="penulis">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penerbit</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="penerbit" id="penerbit">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tahun Terbit</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="20" name="no_hp" id="nama_anggota"></td>
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