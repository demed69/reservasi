<?= $this->extend('admin/template/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-4">
    <h2>kariawan</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>nama </th>
                <th>role </th>
                <th>email </th>
                <th>no hp </th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Budi</td>
                <td>Admin</td>
                <td>budi@admin.com</td>
                <td>08123456789</td>
                <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
                        edit
                    </button> | <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal">
                        hapus
                    </button></td>
            </tr>
            <tr>
                <td>Ani</td>
                <td>Pegawai</td>
                <td>ani@pegawai.com</td>
                <td>08987654321</td>
                <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button> | <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal">hapus </button></td>
            </tr>
        </tbody>
    </table>
</div>




<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Karyawan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Nama</p>
                <input class="form-control form-control-sm" type="text" placeholder="contoh: beras" aria-label=".form-control-sm example">
                <p>Email </p>
                <input class="form-control form-control-sm" type="email" placeholder="contoh@email.com" aria-label=".form-control-sm example ">
                <p>Nomor hp </p>
                <input class="form-control form-control-sm" type="number" placeholder="08123456789" aria-label=".form-control-sm example">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data karyawan ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>