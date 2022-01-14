<div class="container pt-5" align="right">
    <a href="<?= base_url('barang/tambah');?>" class="btn btn-primary mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-danger text-white">
            <h4 class="card-title" align="center">Data Distributor</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Distributor</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getBarang as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['nama_barang'];?></td>
                                <td><?= $isi['qty'];?></td>
                                <td><?= $isi['harga_beli'];?></td>
                                <td>
                                    <a href="<?= base_url('barang/edit/'.$isi['id_barang']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('barang/hapus/'.$isi['id_barang']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data barang ?')"
                                    class="btn btn-danger">
                                    Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>