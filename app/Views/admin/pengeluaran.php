<?= $this->extend('admin/template/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-4">
    <h2>Pengeluaran</h2>

    <p>Tambahkan pengeluaran</p>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah
    </button>

    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>Pembelian Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($pengeluaran)): ?>
                <?php foreach ($pengeluaran as $row): ?>
                    <tr>
                        <td><?= esc($row['nama_barang']) ?></td>
                        <td><?= esc($row['jumlah']) ?></td>
                        <td>Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
                        <td><?= esc($row['tanggal']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center">Belum ada data</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('pengeluaran/simpan') ?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pengeluaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Nama Barang</p>
                    <input name="nama_barang" class="form-control form-control-sm" type="text" placeholder="contoh: beras" required>

                    <p>Jumlah Barang</p>
                    <input name="jumlah" class="form-control form-control-sm" type="text" required>

                    <p>Harga</p>
                    <input name="harga" class="form-control form-control-sm" type="number" required>

                    <p>Tanggal</p>
                    <input name="tanggal" class="form-control form-control-sm" type="date" value="<?= date('Y-m-d') ?>" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>