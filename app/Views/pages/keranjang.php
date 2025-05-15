<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2>Pesanan Anda</h2>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<table class="table">
    <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $total = 0; ?>
        <?php foreach ($cartItems as $index => $item): ?>
            <?php
            $quantity = $item['quantity'] ?? 1;
            $price = $item['price'] ?? 0;
            $subtotal = $price * $quantity;
            $total += $subtotal;
            ?>
            <tr>
                <td><?= esc($item['product']) ?></td>
                <td>
                    <form action="<?= base_url('keranjang/update/' . $index) ?>" method="post" style="display: flex; align-items: center; gap: 5px;">
                        <button type="submit" name="action" value="decrease" class="btn btn-secondary btn-sm">-</button>
                        <span><?= $item['quantity'] ?></span>
                        <button type="submit" name="action" value="increase" class="btn btn-secondary btn-sm">+</button>
                    </form>
                </td>
                <td>Rp <?= number_format($subtotal, 0, ',', '.') ?></td>
                <td>
                    <a href="<?= base_url('keranjang/hapus/' . $index) ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Footer tetap di bawah dengan tombol bayar -->
<footer class="fixed-bottom bg-light d-flex justify-content-between p-3 border-top">
    <div class="total">
        <h4>Total :</h4>
        <h3>Rp <?= number_format($total, 0, ',', '.') ?></h3>
    </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Bayar
    </button>
</footer>

<!-- Modal Pembayaran -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pembayaran</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('keranjang/checkout') ?>" method="post">
                <div class="modal-body">
                    <label for="nama">Nama</label>
                    <input name="nama" class="form-control" type="text" placeholder="Nama Anda" required>

                    <label for="meja">No Meja</label>
                    <input name="meja" class="form-control" type="text" placeholder="Contoh: 12" required>

                    <label for="metode">Pembayaran</label>
                    <select name="metode" class="form-select" required>
                        <option value="">Pilih metode pembayaran</option>
                        <option value="cash">Tunai</option>
                        <option value="qris">QRIS</option>
                        <option value="transfer">Transfer</option>
                    </select>

                    <label for="catatan">Catatan</label>
                    <textarea name="catatan" class="form-control" placeholder="Contoh: jangan pedas" rows="3"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Pesanan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>