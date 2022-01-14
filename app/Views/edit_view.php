<div class="container p-5">
    <a href="<?= base_url('barang');?>" class="btn btn-warning mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-success text-white">
            <h4 class="card-title">Edit Data : <?= $barang->nama_barang;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('barang/update');?>">
                <div class="form-group">
                    <label for="">Nama Distributor</label>
                    <input type="text" value="<?= $barang->nama_barang;?>" name="nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" value="<?= $barang->qty;?>" name="qty" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="text" value="<?= $barang->harga_beli;?>" name="beli" required class="form-control">
                </div>
                <input type="hidden" value="<?= $barang->id_barang;?>" name="id_barang">
                <button class="btn btn-success">Edit Data</button>
            </form>
            
        </div>
    </div>
</div>