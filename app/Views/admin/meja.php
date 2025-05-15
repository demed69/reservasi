<?= $this->extend('admin/template/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-4">
    <h2>Daftar Meja</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">Tambah Meja</button>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Meja</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($meja as $row): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= esc($row['table_number']) ?></td>
                    <td><?= esc($row['status']) ?></td>
                    <td>
                        <a href="<?= base_url('/meja/hapus/' . $row['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus meja ini?')">Hapus</a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal Tambah Meja -->
<div class="modal fade" id="modalTambah" tabindex="-1">
    <div class="modal-dialog">
        <form action="<?= base_url('/meja/simpan') ?>" method="POST" class="modal-content">
            <?= csrf_field() ?>
            <div class="modal-header">
                <h5 class="modal-title">Tambah Meja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <label for="table_number">Nomor Meja</label>
                <input type="text" id="table_number" name="table_number" class="form-control" required>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </form>

    </div>
</div>

<?= $this->endSection(); ?>