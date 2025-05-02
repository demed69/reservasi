<?= $this->extend('admin/template/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-4">
    <h2>Daftar Pemesan Makanan</h2>
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Pemesan</th>
                <th>Makana</th>
                <th>Harga</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>Nasi Goreng</td>
                <td>Rp 25.000</td>
                <td>2023-10-01</td>
            </tr>
            <tr>
                <td>Jane Smith</td>
                <td>Ayam Penyet</td>
                <td>Rp 30.000</td>
                <td>2023-10-02</td>
            </tr>
            <tr>
                <td>Ali Ahmad</td>
                <td>Bakso</td>
                <td>Rp 20.000</td>
                <td>2023-10-03</td>
            </tr>
        </tbody>
    </table>
</div>

<?= $this->endSection('content'); ?>