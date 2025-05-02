<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h2>Pesanan Anda</h2>
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
            <!-- Contoh item keranjang -->
            <tr>
                <td>Produk 1</td>
                <td>
                    <button class="btn btn-secondary btn-sm" onclick="updateQuantity(-1)">-</button>
                    <span id="quantity-1">1</span>
                    <button class="btn btn-secondary btn-sm" onclick="updateQuantity(1)">+</button>
                </td>
                <td>Rp 100.000</td>
                <td>
                    <button class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <!-- Tambahkan item keranjang lainnya di sini -->
        </tbody>
    </table>
    <footer class="fixed-bottom bg-light d-flex justify-content-between">
        <div class="total">
            <h4>Total : </h4>
            <h3>Rp 100.000</h3>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            bayar
        </button>
    </footer>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Nama</p>
                    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                    <p>No Meja</p>
                    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                    <p>Pembayaran</p>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <p>catatan</p>
                    <textarea class="form-control " placeholder=" contoh : janga pedas " id="" rows="3"></textarea>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function updateQuantity(change) {
        const quantityElement = document.getElementById('quantity-1');
        let currentQuantity = parseInt(quantityElement.innerText);
        currentQuantity += change;
        if (currentQuantity < 0) currentQuantity = 0; // Mencegah jumlah negatif
        quantityElement.innerText = currentQuantity;
    }
</script>

<?= $this->endSection('content'); ?>