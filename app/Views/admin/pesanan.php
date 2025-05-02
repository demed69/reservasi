<?= $this->extend('admin/template/template'); ?>

<?= $this->section('content'); ?>

<h1>Daftar Pesanan</h1>

<p>tanggal :</p>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Meja</th>
            <th scope="col">Nama</th>
            <th scope="col">pesanan</th>
            <th scope="col">deskripsi</th>
            <th scope="col">Total</th>
            <th scope="col">aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>Pizza</td>
            <td>Large pizza with extra cheese</td>
            <td>Rp 500.000</td>
            <td>
                <button class="btn btn-primary">Cetak Pesanan</button>
                <button class="btn btn-danger">Cetak Nota</button>
                <button class="btn btn-danger" onclick="return confirm('apakah anda yakin pesanan selesai?');">Selesai</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jane Smith</td>
            <td>Pasta</td>
            <td>Spaghetti with marinara sauce</td>
            <td>Rp 750.000</td>
            <td>
                <button class="btn btn-primary">Cetak Pesanan</button>
                <button class="btn btn-danger">Cetak Nota</button>
                <button class="btn btn-danger" onclick="return confirm('apakah anda yakin pesanan selesai?');">Selesai</button>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Michael Johnson</td>
            <td>Burger</td>
            <td>Cheeseburger with fries</td>
            <td>Rp 1.000.000</td>
            <td>
                <button class="btn btn-primary">Cetak Pesanan</button>
                <button class="btn btn-danger">Cetak Nota</button>
                <button class="btn btn-danger" onclick="return confirm('apakah anda yakin pesanan selesai?');">Selesai</button>
            </td>
        </tr>
    </tbody>
</table>

<?= $this->endSection('content'); ?>