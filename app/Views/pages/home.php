<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<h1 class="text-center font-weight-bold">Menu</h1>

<!-- Dropdown untuk filter kategori -->
<div class="d-flex container justify-content-end mb-3">
    <form method="get" action="">
        <select name="category_id" onchange="this.form.submit()" class="form-select">
            <option value="">-- Semua Kategori --</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category['id']; ?>" <?= ($selectedCategory == $category['id']) ? 'selected' : '' ?>>
                    <?= esc($category['name']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>
</div>


<!-- Tampilkan menu berdasarkan kategori -->
<div class="container d-flex flex-wrap gap-3">
    <?php foreach ($menus as $menu): ?>
        <div class="card" style="width: 18rem; transition: transform 0.2s;"
            onmouseover="this.style.transform='scale(1.05)'"
            onmouseout="this.style.transform='scale(1)'">
            <img src="<?= base_url('uploads/menu/' . $menu['photo']); ?>" class="card-img-top" alt="<?= esc($menu['name']); ?>">
            <div class="card-body">
                <h5 class="card-title"><?= esc($menu['name']); ?></h5>
                <p class="card-text"><?= esc($menu['description']); ?></p>
                <p class="card-text fw-bold">Rp <?= number_format($menu['price'], 0, ',', '.'); ?></p>
                <form class="add-to-cart-form">
                    <input type="hidden" name="id" value="<?= $menu['id']; ?>">
                    <input type="hidden" name="nama" value="<?= $menu['name']; ?>">
                    <input type="hidden" name="price" value="<?= $menu['price']; ?>"> <!-- Ini penting -->
                    <button type="submit" class="btn btn-primary float-end">+</button>
                </form>

            </div>
        </div>
    <?php endforeach; ?>
</div>


<script>
    document.querySelectorAll('.add-to-cart-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Stop form submit

            const formData = new FormData(this);

            fetch('/keranjang/tambah', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    showAlert('✅ Berhasil ditambahkan ke keranjang!', 'success');
                })
                .catch(error => {
                    showAlert('❌ Gagal menambahkan ke keranjang!', 'danger');
                });
        });
    });

    function showAlert(message, type) {
        const alertBox = document.createElement('div');
        alertBox.className = `alert alert-${type} alert-dismissible fade show mt-3`;
        alertBox.role = 'alert';
        alertBox.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;

        document.getElementById('alert-container').appendChild(alertBox);

        // Auto close after 3 seconds
        setTimeout(() => {
            alertBox.remove();
        }, 3000);
    }
</script>


<?= $this->endSection(); ?>