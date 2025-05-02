<?= $this->extend('admin/template/template'); ?>

<?= $this->section('content'); ?>
<!-- Content -->
<div class="content">
    <h2>Dashboard</h2>
    <p>Selamat datang di panel admin.</p>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Meja</h5>
                    <p class="card-text">10</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Makanan</h5>
                    <p class="card-text">50</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Pesanan</h5>
                    <p class="card-text">25</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian Grafik -->
    <div class="row">
        <div class="col-md-12">
            <canvas id="financialChart"></canvas>
        </div>
    </div>
</div>

<!-- Tambahkan skrip untuk Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('financialChart').getContext('2d');
    var financialChart = new Chart(ctx, {
        type: 'line', // Menggunakan grafik garis
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            datasets: [{
                label: 'Pemasukan',
                data: [1200, 1900, 3000, 2500, 2200, 3000, 3500, 4000, 4500, 5000, 6000, 7000], // Data pemasukan
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                fill: true
            }, {
                label: 'Pengeluaran',
                data: [800, 1200, 1500, 2000, 1800, 2500, 3000, 3200, 3500, 4000, 4500, 5000], // Data pengeluaran
                borderColor: 'rgba(255, 99, 132, 1)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                fill: true
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<?= $this->endSection('content'); ?>