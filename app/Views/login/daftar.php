<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function validatePassword() {
            let password = document.getElementById("password").value;
            let confirmPassword = document.getElementById("confirm_password").value;
            let message = document.getElementById("passwordHelp");

            if (password !== confirmPassword) {
                message.textContent = "Konfirmasi password tidak cocok!";
                message.style.color = "red";
                return false;
            } else {
                message.textContent = "";
                return true;
            }
        }
    </script>
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow p-4" style="width: 400px;">
        <h4 class="text-center">Daftar Akun</h4>
        <form action="register_process.php" method="POST" onsubmit="return validatePassword()">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Masukkan nama">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Masukkan email">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="tel" class="form-control" id="no_hp" name="no_hp" required pattern="[0-9]{10,15}" placeholder="Masukkan nomor HP">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan password">
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="confirm_password" required placeholder="Masukkan kembali password">
                <small id="passwordHelp" class="form-text"></small>
            </div>
            <button type="submit" class="btn btn-primary w-100">Daftar</button>
        </form>
        <div class="text-center mt-3">
            <small>Sudah punya akun? <a href="/login">Login</a></small>
        </div>
    </div>

    <!-- Bootstrap 5 JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>