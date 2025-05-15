<?= $this->extend('admin/template/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h1>Menu</h1>
    <p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Menu
        </button>
    </p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Kategori</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($menus as $m): ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td>
                        <?php if (!empty($m['photo'])): ?>
                            <img src="<?= base_url('uploads/menu/' . $m['photo']) ?>" alt="gambar" style="width: 50px; height: auto;">
                        <?php else: ?>
                            <span class="text-muted">Tidak ada</span>
                        <?php endif; ?>
                    </td>
                    <td><?= esc($m['name']) ?></td>
                    <td><?= esc($m['category_id']) ?></td>
                    <td><?= esc($m['description']) ?></td>
                    <td>Rp <?= number_format($m['price'], 0, ',', '.') ?></td>
                    <td>
                        <!-- Tombol trigger modal -->
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $m['id'] ?>">
                            Edit
                        </button>

                        <a href="<?= site_url('menu/delete/' . $m['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal tambah menu -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/menu/save" method="post" enctype="multipart/form-data" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Menu</label>
                    <input type="text" class="form-control" id="nama" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" id="kategori" name="category_id" required>
                        <option value="">-- Pilih Kategori --</option>
                        <?php foreach ($categories as $cat): ?>
                            <option value="<?= $cat['id'] ?>"><?= esc($cat['name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="description" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="price" required>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input class="form-control" type="file" id="gambar" name="photo" accept="image/*" required>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan Menu</button>
            </div>
        </form>
    </div>
</div>


<!-- Modal Edit -->
<div class="modal fade" id="editModal<?= $m['id'] ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $m['id'] ?>" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= site_url('menu/update/' . $m['id']) ?>" method="post">
            <?= csrf_field() ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel<?= $m['id'] ?>">Edit Menu: <?= esc($m['name']) ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name<?= $m['id'] ?>" class="form-label">Nama Menu</label>
                        <input type="text" class="form-control" id="name<?= $m['id'] ?>" name="name" value="<?= esc($m['name']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="category<?= $m['id'] ?>" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="category<?= $m['id'] ?>" name="category_id" value="<?= esc($m['category_id']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="description<?= $m['id'] ?>" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description<?= $m['id'] ?>" name="description"><?= esc($m['description']) ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price<?= $m['id'] ?>" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="price<?= $m['id'] ?>" name="price" value="<?= esc($m['price']) ?>" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>