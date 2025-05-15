<?= $this->extend('admin/template/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <h1 class="my-4">Daftar Pesanan</h1>

    <p><strong>Tanggal:</strong> <?= date('d-m-Y') ?></p>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No Meja</th>
                <th>Nama Pemesan</th>
                <th>Menu</th>
                <th>Total Bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($orders)): ?>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?= esc($order['meja_id']) ?></td>
                        <td><?= esc($order['customer_name']) ?></td>
                        <td><?= esc($order['menu']) ?></td>
                        <td>Rp <?= number_format($order['total'], 0, ',', '.') ?></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Cetak Pesanan</a>
                            <a href="#" class="btn btn-sm btn-success">Cetak Nota</a>
                            <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin pesanan selesai?');">Selesai</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">Tidak ada pesanan</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>