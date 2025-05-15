<?= $this->extend('admin/template/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-4">
    <h2>Daftar Karyawan</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Role</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['name']) ?></td>
                    <td><?= esc($user['role']) ?></td>
                    <td><?= esc($user['email']) ?></td>
                    <td><?= esc($user['no_hp'] ?? '-') ?></td>
                    <td>
                        <!-- Tombol Edit -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $user['id'] ?>">Edit</button>

                        <!-- Tombol Hapus -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $user['id'] ?>">Hapus</button>
                    </td>
                </tr>

                <!-- Modal Edit -->
                <div class="modal fade" id="editModal<?= $user['id'] ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $user['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="<?= base_url('admin/karyawan/update/' . $user['id']) ?>" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel<?= $user['id'] ?>">Edit Karyawan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Nama</p>
                                    <input class="form-control form-control-sm" type="text" name="name" value="<?= esc($user['name']) ?>" required>

                                    <p>Email</p>
                                    <input class="form-control form-control-sm" type="email" name="email" value="<?= esc($user['email']) ?>" required>

                                    <p>Nomor HP</p>
                                    <input class="form-control form-control-sm" type="text" name="phone" value="<?= esc($user['no_hp'] ?? '') ?>">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Modal Hapus -->
                <div class="modal fade" id="hapusModal<?= $user['id'] ?>" tabindex="-1" aria-labelledby="hapusModalLabel<?= $user['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="<?= base_url('admin/karyawan/delete/' . $user['id']) ?>" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="hapusModalLabel<?= $user['id'] ?>">Konfirmasi Hapus</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin ingin menghapus <strong><?= esc($user['name']) ?></strong>?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection('content'); ?>