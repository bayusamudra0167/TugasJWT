<div class="container p-5">
    <a href="<?= base_url('barang');?>" class="btn btn-warning mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title">Tambah Data Distributor</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('barang/add');?>">
                <div class="form-group">
                    <label for="">Nama Distributor</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="qty" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="text" name="beli" class="form-control" required>
                </div>
                <button class="btn btn-primary">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>