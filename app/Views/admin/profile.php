<?= $this->extend('admin/template/template'); ?>
<?= $this->section('content'); ?>

<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h2 class="text-2xl font-semibold mb-6 text-center">Edit Profil</h2>

        <form action="/profile/update" method="POST" enctype="multipart/form-data" class="space-y-4">
            <div class="container">

                <!-- Nama -->
                <div>
                    <label class="block text-gray-700">Nama Lengkap</label>
                    <p>
                        <input type="text" name="name" value="Nama Pengguna" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </p>
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-gray-700">Email</label>
                    <p>
                        <input type="email" name="email" value="user@example.com" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </p>
                </div>

                <!-- No HP -->
                <div>
                    <label class="block text-gray-700">No. HP</label>
                    <p>
                        <input type="text" name="phone" value="08123456789" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </p>
                </div>

                <!-- Password Baru -->
                <div>
                    <label class="block text-gray-700">Password Baru</label>
                    <p>
                        <input type="password" name="password" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </p>
                </div>

                <!-- Konfirmasi Password -->
                <div>
                    <label class="block text-gray-700">Konfirmasi Password</label>
                    <p>
                        <input type="password" name="password_confirm" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </p>
                </div>

                <!-- Tombol Simpan -->
                <p>
                <div class="text-center">
                    <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600">Simpan</button>
                </div>
                </p>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection('content'); ?>