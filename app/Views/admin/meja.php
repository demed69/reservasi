<?= $this->extend('admin/template/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-4">
    <h2>Daftar Meja</h2>
    <p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Meja
        </button>
    </p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Meja</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Meja 1</td>
                <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Meja 2</td>
                <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <!-- Tambahkan baris meja lainnya sesuai kebutuhan -->
        </tbody>
    </table>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Meja Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin/meja/simpan" method="POST">
                    <div class="mb-3">
                        <label for="nama_meja" class="form-label">Nama Meja</label>
                        <input type="text" class="form-control" id="nama_meja" name="nama_meja" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>