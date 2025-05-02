<?= $this->extend('admin/template/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h1>Menu</h1>
    <p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Menu
        </button>
    </p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">no</th>
                <th scope="col">gambar</th>
                <th scope="col">nama</th>
                <th scope="col">category</th>
                <th scope="col">deskripsi</th>
                <th scope="col">harga</th>
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><img src="path/to/image1.jpg" alt="Gambar 1" style="width: 50px; height: auto;"></td>
                <td>Mark</td>
                <td>@mdo</td>
                <td>Deskripsi singkat tentang Mark.</td>
                <td>Rp 100.000</td>
                <td>
                    <a href="edit.php?id=1" class="btn btn-warning">Edit</a>
                    <a href="delete.php?id=1" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><img src="path/to/image2.jpg" alt="Gambar 2" style="width: 50px; height: auto;"></td>
                <td>Jacob</td>
                <td>@fat</td>
                <td>Deskripsi singkat tentang Jacob.</td>
                <td>Rp 150.000</td>
                <td>
                    <a href="edit.php?id=2" class="btn btn-warning">Edit</a>
                    <a href="delete.php?id=2" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<!-- Modal tambah menu -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/admin/menu/save" method="post" enctype="multipart/form-data" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Menu</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" id="kategori" name="kategori" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="dessert">Dessert</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" required>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input class="form-control" type="file" id="gambar" name="gambar" accept="image/*" required>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan Menu</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection('content'); ?>