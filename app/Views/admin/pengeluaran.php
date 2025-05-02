<?= $this->extend('admin/template/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-4">
    <h2>Pengeluaran</h2>

    <P>Tambahkan pengeluaran</P>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah
    </button>


    <table class="table table-striped">
        <thead>
            <tr>
                <th>pembelian barang</th>
                <th>jumlah </th>
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




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Nama Barang</p>
                <input class="form-control form-control-sm" type="text" placeholder="contoh: beras" aria-label=".form-control-sm example">
                <p>Jumlah Barang </p>
                <input class="form-control form-control-sm" type="number" placeholder="" aria-label=".form-control-sm example ">
                <p>Harga </p>
                <input class="form-control form-control-sm" type="number" placeholder="" aria-label=".form-control-sm example">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">simpan</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>